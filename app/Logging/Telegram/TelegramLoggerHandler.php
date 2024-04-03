<?php

declare(strict_types=1);

namespace App\Logging\Telegram;

use App\Exceptions\TelegramLogException;
use App\Services\Telegram\TelegramBotApi;
use Exception;
use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;
use Monolog\LogRecord;

final class TelegramLoggerHandler extends AbstractProcessingHandler
{
    protected int $chatId;
    protected string $token;

    public function __construct(array $config)
    {
        $level = Logger::toMonologLevel($config['level']);

        parent::__construct($level);

        $this->chatId = $config['chat_id'];
        $this->token = $config['token'];
    }

    /**
     * @throws TelegramLogException
     */
    protected function write(LogRecord $record): void
    {
        try {
            $sendResult = TelegramBotApi::sendMessage($this->token, $this->chatId, $record->formatted);
            if (!$sendResult) {
                throw new TelegramLogException('Ошибка на стороне сервера, либо клиента при отправке лога в телеграм');
            }
        } catch (Exception $e) {
            throw new TelegramLogException($e->getMessage());
        }
    }
}