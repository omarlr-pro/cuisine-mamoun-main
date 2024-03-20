<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->prenom }} {{ $user->nom }}</div>

                <div class="card-body">
                    <ul>
                        <li><strong>Civilite:</strong> {{ $user->civilite }}</li>
                        <li><strong>CIN:</strong> {{ $user->cin }}</li>
                        <li><strong>Date of Birth:</strong> {{ $user->dob }}</li>
                        <li><strong>Adresse:</strong> {{ $user->adresse }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>