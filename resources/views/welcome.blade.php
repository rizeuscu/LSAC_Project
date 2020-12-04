<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lsac.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/lsac.js') }}"></script>

    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light p-5">
            <a class="navbar-brand pl-5" href="{{ url('/') }}">
                <img class="img-fluid" src="{{ asset('images/ajutor.png') }}" alt="help">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse pr-5" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active" id="listItem">
                        <button class="btn nav-link" onclick="window.location='{{ route('login') }}'">Logare</button>
                    </li>
                    <li class="nav-item" id="listItem">
                        <button class="btn nav-link" onclick="window.location='{{ route('register') }}'">Creare cont</button>
                    </li>
                    <li class="nav-item" id="listItem">
                        <button class="btn nav-link" href="#">Contact</button>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-6 pl-5">
                    <p>Cumpăratul de teme nu a fost niciodată mai simplu!</p>
                    <p>Platforma ideala pentru studenții de la Politehnică cu portofele pline, care au nevoie urgent de un înger care să le repare nota de intrare în examen.</p>

                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Vreau să cumpăr</button> <!-- add .col-12 in order to be full width -->
                            <button class="btn" style="background-color: #92E3A9;">Vreau sa fac teme pentru alții</button>
                </div>
                <div class="col-md-6" style="background-color: yellow;">
                    <center><img class="img-fluid" src="{{ asset('images/studying.png') }}" alt="studying"></center>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Exprimă-ți frustrările</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form onsubmit="return false;">
                            @csrf
                            <div>
                                <div class="row form-group">
                                    <select name="subject" class="custom-select col-12" id="subject">
                                        <option value="">Alege materia</option>
                                            @foreach($subjects as $subject)
                                                <option value="{{$subject->name}}">{{$subject->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="row form-group">
                                    <input class="custom-select col-12" type="text" placeholder="Titlul proiectului" id="projectTitle">
                                </div>
                                <div class="row form-group d-flex justify-content-center align-items-center">
                                    <button type='button' onclick="sendRequest()" class="btn btn-primary btn-rounded" style="background-color: #2d838d;color: #ffffff">Încarcă</button>
                                </div>
                            </div>
                            <div class="container-fluid" id="print">
                                @foreach ($complaints as $complaint)
                                    {{ $complaint->title }}
                                    <br/>
                                    {{ $complaint->subject }}
                                    <br/>
                                    <br/>
                                @endforeach
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-color:green;">
            <div class="container" style="background-color:blue;">
                <div class="row d-flex justify-content-center">
                    <p>Cum funcționează?</p>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        adsa
                    </div>
                    <div class="col-md-4">
                        adsa
                    </div>
                    <div class="col-md-4">
                        adsa
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    dadsa
                </div>
                <div class="col-md-6">
                    <form>
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    sadsds
                </div>
                <div class="row d-flex align-items-center justify-content-center">
                    Copyright <?php echo date("Y"); ?> | Cine ne pârăște o mierlește.
                </div>
            </div>       
        </footer>

    </body>

</html>

<script type="text/javascript">
        function sendRequest(){
            // printing the data in the modal
            var inputVal = $("#projectTitle").val();
            var selectedSubject = $("#subject").children("option:selected").val();
            $("#print").append(`${inputVal}</br>(${selectedSubject})</br></br>`);

            // ajax call to send the data to the controller
            $.ajax({
                    url: "{{ route('sendData') }}",
                    type: 'post',
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        subject: selectedSubject,
                        title: inputVal
                    },
                    success: function (status) {
                        if (status === "success"){
                            console.log('Data were transferred to the server!');
                        }
                    },
                }).fail(function() {
                    console.log('Ooops! Seems like we encountered an error!');
                });
            }
</script>
