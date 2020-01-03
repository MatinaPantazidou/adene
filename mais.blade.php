@extends('layouts/master')

@section('assets')
   <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
@endsection

@section("main")

 <div class="container-fluid">

            <div class="row banner"> <!-- row1-->
                <div class="col-sm-12">
                    <img style="margin-top: 30px; margin-right: 20px; margin-left: 10px; width: 1230px;" src="{{ asset('images/temp/roof.png')}}">
                </div>
            </div>

            <div class="row"> <!-- row2-->
                <div class="col-md-7">
                    <h2 style="margin-left: 60px; margin-top: 30px;">Webinar Request 2 Action-30 de Juhno</h2>
                    <p style="margin-left: 60px; color: greenyellow" id="demo"></p>

                    <script>
                        var d = new Date();
                        document.getElementById("demo").innerHTML = d.toDateString();
                    </script>
                    <br>
                    <h4 style="margin-left: 60px;">A reabilitação urbana e a importância do certificado energético dos edifícios: plataformas online de apoio à reabilitação.</h4>
                    <p style="margin-left: 60px;">Como promover a implementação de soluções de eficiência energética? Pode o certificado energético da habitação apoiar o processo de reabilitação? Como valorizar a informação que consta no certificado energético e apoiar o proprietário nas decisões a tomar? Quais as barreiras que limitam a adoção de medidas de reabilitação energética?<br><br>

                        Estas são as questões que o <b style="color: greenyellow;">projeto Request 2 Action</b> aborda num webinar a ter lugar no próximo dia 30 de junho entre as 10h00 e as 11h30, onde serão apresentadas as plataformas online de apoio à reabilitação, desenvolvidas no âmbito deste projeto, nos países europeus parceiros. As experiências adquiridas, as boas práticas adotadas e como passar da teoria à ação, são alguns dos tópicos que o consórcio do projeto irá partilhar.<br><br>

                        As entidades responsáveis pela definição e gestão destas plataformas online são as anfitriãs desta sessão, onde irão apresentar as suas experiências e os principais desafios encontrados ao longo do processo. São na sua maioria agências de energia nacionais, que gerem os Sistemas Nacionais de Certificação Energética de Edifícios de cada país parceiro, o que lhes permite tirar partido do leque de informação disponível nestes sistemas e assim melhor fundamentar os conteúdos destas plataformas online.

                        <br><br>A ADENE - Agência para a Energia participa neste projeto com mais 11 parceiros a maioria dos quais Agências de <b style="color: greenyellow;">Energia da Rede Europeia </b>(EnR).</p>
                </div>

                <div class="col-md-5">
                    <h4 style="margin-top: 40px; margin-left: 30px; color: greenyellow;"><b>Pesquisar</b></h4><br><br>
                    <input class="search" type="search" style="margin-left: 30px; width: 270px;" id="mySearch" placeholder="Insila palavra chave para pesquisar">
                    <p id="demo"></p>
                    <br><br>
                    <a style="color: black; margin-left: 30px;" href="#"><b>Notícias ADENE</b></a><br>
                    <a style="color: black; margin-left: 30px;" href="#"><b>Comunicados de Imprensa</b></a><br>
                    <a style="color: black; margin-left: 30px;" href="#"><b>Galeria de imagens</b></a><br><br>

                    <h4 style="margin-top: 30px; margin-left: 30px; color: greenyellow;"><b>Arquivo</b></h4>

                    <a style="color: black; margin-left: 30px;" href="#"><b>2017</b></a><br><br>
                    <a style="color: black; margin-left: 30px;" href="#"><b>2016</b></a><br><br>
                    <a style="color: black; margin-left: 30px;" href="#"><b>2015</b></a><br><br>
                    <a style="color: black; margin-left: 30px;" href="#"><b>2014</b></a><br><br>
                    <a style="color: black; margin-left: 30px;" href="#"><b>2013</b></a><br><br>
                    <a style="color: black; margin-left: 30px;" href="#"><b>2012</b></a><br><br>

                </div>

            </div>

            <div class="row"> <!-- row3-->
                <div class="col-md-7">
                    <video width="620" height="540" style="margin-left: 60px;" controls>
                        <source src="{{ asset('images/temp/myvideo.mp4')}}" type="video/mp4">   
                    </video>
                </div>

                <div class="col-md-5">

                    <div class="row"> <!--row3.1-->
                        <h4 style="margin-left: 55px; color: greenyellow;"><b>Notícias mais lidas</b></h4><br>

                    </div>

                    <div class="row"> <!--row3.2-->
                        <div class="col-md-2">
                            <ul style="list-style: none;">
                                <li><img src="{{ asset('images/temp/istio1.png')}}"></li>
                                <li><img style="margin-top: 10px;" src="{{ asset('images/temp/man1.png')}}"></li>
                                <li><img style="margin-top: 10px;" src="{{ asset('images/temp/roof1.png')}}"></li>
                            </ul>

                        </div>

                        <div class="col-md-7">
                            <p style="margin-left: 60px;">Lorem ipsum dolor sit amet<br>(lorem ipsum)</p>
                            <p style="margin-left: 60px; color: greenyellow">Dezembro 5, 2016</p>

                            <p style="margin-top: 20px; margin-left: 60px;">Lorem ipsum dolor sit amet<br>(lorem ipsum)</p>
                            <p style="margin-left: 60px; color: greenyellow">Dezembro 5, 2016</p>

                            <p style="margin-top: 20px; margin-left: 60px;">Lorem ipsum dolor sit amet<br>(lorem ipsum)</p>
                            <p style="margin-left: 60px; color: greenyellow">Dezembro 5, 2016</p>
                        </div>

                    </div>

                </div>

            </div>

            <div class="row"> <!--row4-->
                <div class="col-md-7">
                    <h4 style="margin-left: 70px; margin-top: 40px;">A quem poderá interessar</h4>
                    <p style="margin-left: 70px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <p style="margin-left: 70px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <p style="margin-left: 70px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <p style="margin-left: 70px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
            </div>

            <div class="row"> <!--row5-->
                <div class="col-md-2">
                    <h4 style="margin-left: 70px; margin-top: 30px; color: greenyellow;">Partilhar</h4>
                </div>
                <div class="col-md-2">
                    <img style="margin-top: 20px; max-width: 85%;" src="{{ asset('images/temp/dots.png')}}"'>
                </div>
            </div>
        </div>

        <script src="{{mix('js/app.js')}}" type="text/javascript"></script>

@endsection