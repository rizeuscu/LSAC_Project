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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light p-5">
            <a id="navbar-brand" class="navbar-brand pl-5" href="{{ url('/') }}">
                <img class="img-fluid" src="{{ asset('images/ajutor.png') }}" alt="help">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img class="img-fluid" src="{{ asset('images/9dots.png') }}" alt="studying">
            </button>

            <div class="collapse navbar-collapse pr-5" id="navbarSupportedContent">
                <ul id="navList" class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <button id="buttons" class="btn btn-primary" onclick="window.location='{{ route('login') }}'">Logare</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn" onclick="window.location='{{ route('register') }}'">Creare cont</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn"onclick="window.location='{{ url('/') }}'">Contact</button>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-xl-6" id="buyHomeworks">
                    <p id="homework">Cumpăratul de teme nu a fost niciodată mai simplu!</p>
                    <p id="richStudent">Platforma ideala pentru studenții de la Politehnică cu portofele pline, care au nevoie urgent de un înger care să le repare nota de intrare în examen.</p>

                            <button id="buttons" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Vreau să cumpăr</button> <!-- add .col-12 in order to be full width -->
                            <button class="btn paidWork" id="paidWork">Vreau sa fac teme pentru alții</button>
                </div>
                <div id="studyingGirl" class="col-xl-6">
                    <center><img class="img-fluid" src="{{ asset('images/studying.png') }}" alt="studying"></center>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #92E3A9;">
                        <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: 700; line-height: 20.11px;">Exprimă-ți frustrările</h5>
                            <img id="closeModal" class="img-fluid" src="{{ asset('images/close_modal.png') }}" alt="close_modal"  data-dismiss="modal" aria-label="Close">
                    </div>
                    <div class="modal-body">
                        <form onsubmit="return false;">
                            @csrf
                            <div class="container">
                                <div class="row form-group">
                                    <select name="subject" class="custom-select col-12" id="subject">
                                        <option value="">Alege materia</option>
                                            @foreach($subjects as $subject)
                                                <option value="{{$subject->name}}">{{$subject->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="row form-group">
                                    <input class="form-control col-12" type="text" placeholder="Titlul proiectului" id="projectTitle">
                                </div>
                                <div class="row form-group d-flex justify-content-center align-items-center">
                                    <button type='button' onclick="sendRequest()" id="buttons" class="btn btn-primary col-6 upload">Încarcă</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="container-fluid" id="print">
                        <div class="container-fluid" id="complaintsTillNow">
                            Plângeri introduse până acum.
                        </div>
                        <div class="container" id=complaintsArea>
                            @foreach ($complaints as $complaint)
                                <p class="title">{{ $complaint->title }}</p>
                                <p class="subject">({{ $complaint->subject }})</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="howItGoes">
            <div class="container">
                <div class="row d-flex justify-content-center pb-5">
                    <p id="homework">Cum funcționează?</p>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-4">
                        <div class="row d-flex">
                            <div class="col-3">
                                <img class="img-fluid" src="{{ asset('images/one.png') }}" alt="one">
                            </div>
                            <div class="col-9 howItWorks">
                                Realizezi un cont pe platformă în care introduci câteva detalii personale (nu vă faceți griji, profesorii nu or să va descopere) și materiile la care ai nevoie de ajutor.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row d-flex">
                            <div class="col-3">
                                <img class="img-fluid" src="{{ asset('images/two.png') }}" alt="two">
                            </div>
                            <div class="col-9 howItWorks">
                                Străbați platforma în căutare de studenți care oferă servicii la materiile dorite sau te rogi la Sfântul 5 să primești mesaj de la cineva care te descoperă și e dispus să te salveze.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row d-flex">
                            <div class="col-3">
                                <img class="img-fluid" src="{{ asset('images/three.png') }}" alt="three">
                            </div>
                            <div class="col-9 howItWorks">
                                După ce stabiliți o sumă care oricum este de zeci de ori mai mare decât la alte universități, aștepti ca noul vostru amic să vă încarce soluția pe platformă. Jumătate din plată oferiți în avans, restul după ce vă vedeți intrat în examen.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="mail">
            <div class="row shadow p-5">
                <div class="col-xl-6" id="boldColumn">
                    <p id="boldness">Ai tupeu și crezi că poți să aduci îmbunătățiri la platformă?</p>
                    <p id="sendUsEmail" class="howItWorks">Trimite-ne un mail și roagă-te să nu ne apuce râsul când vedem ce îți trece prin cap.</p>
                </div>
                <div class="col-xl-6">
                    <form>
                        @csrf
                        <div class="form-group">
                            <label>Nume</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Înjurătura</label>
                            <input type="text" class="form-control" style="height:82px;">                           
                        </div>
                      <button type="submit" id="buttons" class="btn btn-primary center-button">Trimite</button>
                    </form>
                </div>
            </div>
        </div>

        <footer>
            <div class="container py-5">
                <div class="row d-flex align-items-center justify-content-center">
                    <a href="#"><img class="img-fluid footer-img" src="{{ asset('images/instagram.png') }}" alt="instagram"></a>
                    <a href="#"><img class="img-fluid footer-img" src="{{ asset('images/twitter.png') }}" alt="twitter"></a>
                    <a href="#"><img class="img-fluid footer-img" src="{{ asset('images/facebook.png') }}" alt="facebook"></a>
                </div>
                <div class="row d-flex align-items-center justify-content-center" id="footerText">
                    <center>Copyright <?php echo date("Y"); ?> | Cine ne pârăște o mierlește.</center>
                </div>
            </div>       
        </footer>

    </body>

</html>

<script src="{{ asset('js/lsac.js') }}"></script>
<script type="text/javascript">
        function sendRequest(){
            // printing the data in the modal
            var inputVal = $("#projectTitle").val();
            var selectedSubject = $("#subject").children("option:selected").val();
            if (inputVal != "" && selectedSubject != "") {
                $("#complaintsArea").append(`<p class="title">${inputVal}</p><p class="subject">(${selectedSubject})</p>`);
            }
            else {
                alert('Selecteaza materia si introdu numele unui proiect!');
            }
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
