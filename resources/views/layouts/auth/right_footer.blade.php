<div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
    <p class="fw-medium text-black-50 py-2 mb-0">
        <strong>ООО "ИПК"</strong> © <span>{{ date('Y') }}</span>
    </p>
    <ul class="list list-inline py-2 mb-0">
        <li class="list-inline-item">
            <a class="text-muted fw-medium" href="javascript:void(0)">Политика конфиденциальности</a>
        </li>
        <li class="list-inline-item">
            <a class="text-muted fw-medium" href="{{ route('landing.main') . '#contacts' }}">Контакты</a>
        </li>
        <li class="list-inline-item">
            <a class="text-muted fw-medium" href="javascript:void(0)">Условия использования</a>
        </li>
    </ul>
</div>