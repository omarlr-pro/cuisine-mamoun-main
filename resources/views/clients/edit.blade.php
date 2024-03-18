<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Client</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('clients.update', $client->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" id="gender" name="gender" value="{{ $client->gender }}">
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $client->last_name }}">
                        </div>

                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $client->first_name }}">
                        </div>

                        <div class="form-group">
                            <label for="client_type">Client Type</label>
                            <input type="text" class="form-control" id="client_type" name="client_type" value="{{ $client->client_type }}">
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" value="{{ $client->dob }}">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ $client->address }}">
                        </div>

                        <div class="form-group">
                            <label for="address_additional">Additional Address</label>
                            <input type="text" class="form-control" id="address_additional" name="address_additional" value="{{ $client->address_additional }}">
                        </div>

                        <div class="form-group">
                            <label for="zipcode">Zip Code</label>
                            <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{ $client->zipcode }}">
                        </div>

                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ $client->city }}">
                        </div>

                        <div class="form-group">
                            <label for="mobile_phone">Mobile Phone</label>
                            <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" value="{{ $client->mobile_phone }}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $client->phone }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}">
                        </div>

                        <!-- Add more input fields for other attributes -->

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description">{{ $client->description }}</textarea>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="whoaddit" value="{{ Auth::user()->name }}" readonly style="display: none;">
                          </div>
                        <button type="submit" class="btn btn-primary">Update Client</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>