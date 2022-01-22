<!-- Navbar -->
@extends('frontend.section.base')

@section('client_content')

    <!--Main layout-->
    <main class=" pt-4">
        <div class="container wow fadeIn">

            <!-- Heading -->
            <h2 class="my-5 h2 text-center">Checkout form</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <form class="card-body" action="{{ url('home') }}">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6 mb-2">

                                    <!--firstName-->
                                    <div class="md-form ">
                                        <label for="firstName" class="">First name</label>
                                        <input type="text" id="firstName" class="form-control">
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6 mb-2">

                                    <!--lastName-->
                                    <div class="md-form">
                                        <label for="lastName" class="">Last name</label>
                                        <input type="text" id="lastName" class="form-control">
                                    </div>

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->
                            <!--email-->
                            <div class="md-form mb-3">
                                <label for="email" class="">Email</label>
                                <input type="text" id="email" class="form-control" placeholder="youremail@example.com">
                            </div>


                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-lg-3 col-md-12 mb-3">
                                    <label for="" class="control-label">Provinsi</label>
                                    <select name="" id="" class="form-control" onchange="gantiprovinsi(this.value)">
                                        <option value="">Pilih Provinsi</option>
                                        @foreach ($list_provinsi as $provinsi)
                                            <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!--Grid column-->
                                <div class="col-lg-3 col-md-12 mb-3">
                                    <label for="" class="control-label">Kabupaten</label>
                                    <select name="" id="kabupaten" class="form-control"
                                        onchange="gantiKabupaten(this.value)">
                                        <option value="">Pilih Provinsi terlebih dahulu</option>
                                    </select>
                                </div>

                                <div class="col-lg-3 col-md-12 mb-3">
                                    <label for="" class="control-label">Kecamatan</label>
                                    <select name="" id="kecamatan" class="form-control"
                                        onchange="gantiKecamatan(this.value)">
                                        <option value="">Pilih Kabupaten terlebih dahulu</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-12 mb-3">
                                  <label for="" class="control-label">Desa</label>
                                  <select name="" class="form-control" id="desa">
                                      <option value="">Pilih Kecamatan terlebih dahulu</option>
                                  </select>
                                </div>

                            </div>
                            <!--Grid row-->

                            <hr>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"
                                        checked required>
                                    <label class="custom-control-label" for="credit">Credit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                        required>
                                    <label class="custom-control-label" for="debit">Debit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                        required>
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                    <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Expiration date required
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Security code required
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit"> checkout</button>

                        </form>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->



            </div>
            <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->
@endsection


@push('script')
    <script>
        function gantiprovinsi(id) {
            $.get("api/provinsi/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.name}<option/> `;
                }
                $("#kabupaten").html(option)
            });
        }

        function gantiKabupaten(id) {
            $.get("api/kabupaten/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.name}<option/> `;
                }
                $("#kecamatan").html(option)
            });
        }

        function gantiKecamatan(id) {
            $.get("api/kecamatan/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.name}<option/>`;
                }
                $("#desa").html(option)
            });
        }
    </script>
@endpush
