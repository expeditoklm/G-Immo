@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show m-2" role="alert">
    <div class="text-center"> <!-- Ajoutez une classe text-center à la div parente -->
        <span class="fw-bold d-block mx-auto">{{ session('error') }}</span> <!-- Utilisez mx-auto pour centrer le span -->
    </div>
</div>
@endif
@if(session('success'))
<div class="alert alert-primary alert-dismissible fade show m-2" role="alert">
    <div class="text-center"> <!-- Ajoutez une classe text-center à la div parente -->
        <span class="fw-bold d-block mx-auto">{{ session('success') }}</span> <!-- Utilisez mx-auto pour centrer le span -->
    </div>
</div>
@endif


@if(session('message'))
    <div class="alert alert-{{ session('message_type') }}">
        {{ session('message') }}
    </div>
    @php
        session()->forget(['message', 'message_type']);
    @endphp
@endif