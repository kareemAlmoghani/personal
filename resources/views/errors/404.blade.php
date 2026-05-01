@extends('front.app')

@section('title', '404 Page Not Found')

@section('content')
<div class="container px-5 py-5 text-center">

    <div class="row justify-content-center align-items-center" style="min-height: 60vh;">
        <div class="col-lg-8">

            <h1 class="display-1 fw-bold text-primary">404</h1>

            <h2 class="mb-3">
                {{ app()->getLocale() == 'ar' ? 'الصفحة غير موجودة' : 'Page Not Found' }}
            </h2>

            <p class="text-muted mb-4">
                {{ app()->getLocale() == 'ar'
                    ? 'عذراً، الصفحة التي تبحث عنها غير موجودة أو تم نقلها.'
                    : 'Sorry, the page you are looking for does not exist or has been moved.' }}
            </p>

            <a href="{{ route('front.index') }}" class="btn btn-primary px-4">
                {{ app()->getLocale() == 'ar' ? 'العودة للرئيسية' : 'Back to Home' }}
            </a>

        </div>
    </div>

</div>
@endsection