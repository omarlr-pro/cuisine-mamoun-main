<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New User</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control" name="name" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <div class="form-group">
                            <label for="img">Image</label>
                            <input id="img" type="file" class="form-control" name="img">
                        </div>

                        <div class="form-group">
                            <label for="identifat">Identification</label>
                            <input id="identifat" type="text" class="form-control" name="identifat">
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <input id="status" type="text" class="form-control" name="status">
                        </div>

                        <div class="form-group">
                            <label for="civilite">Civilite</label>
                            <input id="civilite" type="text" class="form-control" name="civilite">
                        </div>

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input id="nom" type="text" class="form-control" name="nom">
                        </div>

                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input id="prenom" type="text" class="form-control" name="prenom">
                        </div>

                        <div class="form-group">
                            <label for="cin">CIN</label>
                            <input id="cin" type="text" class="form-control" name="cin">
                        </div>

                        <div class="form-group">
                            <label for="date_naissance">Date de Naissance</label>
                            <input id="date_naissance" type="date" class="form-control" name="date_naissance">
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input id="mobile" type="text" class="form-control" name="mobile">
                        </div>

                        <div class="form-group">
                            <label for="tel_fix">Tel Fix</label>
                            <input id="tel_fix" type="text" class="form-control" name="tel_fix">
                        </div>

                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input id="adresse" type="text" class="form-control" name="adresse">
                        </div>

                        <div class="form-group">
                            <label for="adresse_complementaire">Adresse Complementaire</label>
                            <input id="adresse_complementaire" type="text" class="form-control" name="adresse_complementaire">
                        </div>

                        <div class="form-group">
                            <label for="code_postale">Code Postale</label>
                            <input id="code_postale" type="text" class="form-control" name="code_postale">
                        </div>

                        <div class="form-group">
                            <label for="ville">Ville</label>
                            <input id="ville" type="text" class="form-control" name="ville">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                Create User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>