@if (session('success'))
<div class="alert alert-success mb-4">{{ session('success') }}</div>
@endif

@if (session('info'))
<div class="alert alert-info mb-4">{{ session('info') }}</div>
@endif

@if (session('danger'))
<div class="alert alert-danger mb-4">{{ session('danger') }}</div>
@endif

@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif
