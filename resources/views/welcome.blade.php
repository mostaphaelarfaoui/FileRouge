@extends('master.layout')

    @section('title')
    Welcome Page
    @endsection

    @section('style')

    @endsection

    @section('img')
    <div class="container my-4">
        <img src="https://scontent.frak3-1.fna.fbcdn.net/v/t1.6435-9/128087968_4746968002011748_7967577801624646553_n.jpg?_nc_cat=109&ccb=1-4&_nc_sid=825194&_nc_eui2=AeECVTfjhPw3FAIGhMGXyxLN-EGX19Q3x7H4QZfX1DfHsSo839hHJnp6ADwlzz00rWz7srZpQrA6Bs1Z9t12H5f-&_nc_ohc=3RRKShhWfAAAX_RXuc5&_nc_oc=AQlLU1GweQqxaM5ajyc75EE5W65s-a2b3XdcR8T-tun8JZ_7qyDgQi4YLiy89o7w1_U&_nc_ht=scontent.frak3-1.fna&oh=1571da0b6a1ac88bfd03d27ce87c1b81&oe=613744C2" alt="" width="100%" height="500px">
    </div>
    @endsection


    @section('card')
    <div class="container d-flex justify-content-between">
        <div class="card" style="width: 15rem;">
            <img src="https://image.flaticon.com/icons/png/128/5226/5226577.png" class="card-img-top" alt="..." width="2%" height="30px">
            <div class="card-body ">
                <h5 class="card-title">Municipal</h5>
                <a href="/demande" class="btn btn-primary mb-1" style="width: 100%;">Demande document</a>
                <a href="permis" class="btn btn-primary mb-1" style="width: 100%;">Permis de construire</a>
                <a href="suivi" class="btn btn-primary mb-1" style="width: 100%;">Suivre</a>
                <a href="#" class="btn btn-primary mb-1" style="width: 100%;">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 15rem;">
            <img src="https://image.flaticon.com/icons/png/512/5226/5226615.png" class="card-img-top" alt="..." width="2%" height="30px">
            <div class="card-body">
                <h5 class="card-title">Réclamation</h5>
                <a href="#" class="btn btn-primary mb-1" style="width: 100%;">Soumettre</a>
                <a href="#" class="btn btn-primary mb-1" style="width: 100%;">Suivre</a>
                <a href="#" class="btn btn-primary mb-1" style="width: 100%;">Soumettre Suggestion</a>
                <a href="#" class="btn btn-primary mb-1" style="width: 100%;">Observation</a>
            </div>
        </div>
        <div class="card" style="width: 15rem;">
            <img src="https://image.flaticon.com/icons/png/128/5226/5226577.png" class="card-img-top" alt="..." width="2%" height="30px">
            <div class="card-body">
                <h5 class="card-title">espace famille</h5>
                <a href="#" class="btn btn-primary mb-1" style="width: 100%;">Certificat de naissance</a>
                <a href="#" class="btn btn-primary mb-1" style="width: 100%;">avis de décès</a>
                <a href="#" class="btn btn-primary mb-1" style="width: 100%;">autre services</a>
                <a href="#" class="btn btn-primary mb-1" style="width: 100%;">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 15rem;">
            <img src="https://image.flaticon.com/icons/png/128/5226/5226577.png" class="card-img-top" alt="..." width="2%" height="30px">
            <div class="card-body">
                <h5 class="card-title">Services</h5>
                <a href="#" class="btn btn-primary mb-1" style="width: 100%;">Go somewhere</a>
                <a href="#" class="btn btn-primary mb-1" style="width: 100%;">Go somewhere</a>
                <a href="#" class="btn btn-primary mb-1" style="width: 100%;">Go somewhere</a>
                <a href="#" class="btn btn-primary mb-1" style="width: 100%;">Go somewhere</a>
            </div>
        </div>
    </div>







    @endsection
    @section('script')
    <script>

    </script>
    @endsection

