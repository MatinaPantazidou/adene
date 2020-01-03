@extends('layouts/master')

@section('assets')
    <link href="{{ asset('css/temp/noticias.css') }}" rel="stylesheet">
@endsection

@section("main")

<div class="contentwrapper">
    <div class="banner container-fluid"> 
      <img src="{{ asset('images/temp/banner-roof.jpg')}}" class="max-width">
    </div>
    <div class="row main-row-container">
      <div class="col-sm-8 main-content">
        <div class="col-sm-12 ubuntu-regular entry-text">
          <h2 class="title">Webinar Request 2 Action-30 de Juhno</h2>
          <p class="date medium-green">12/09/2016</p>
          <label class="title-label">A reabilitação urbana e a importância do certificado energético dos edifícios: plataformas online de apoio à reabilitação.</label>
          <p class="ubuntu-light">
          Como promover a implementação de soluções de eficiência energética? Pode o certificado energético da habitação apoiar o processo de reabilitação? Como valorizar a informação que consta no certificado energético e apoiar o proprietário nas decisões a tomar? Quais as barreiras que limitam a adoção de medidas de reabilitação energética?</p>
          <p class="ubuntu-light">Estas são as questões que o <span class="medium-green">projeto Request 2 Action</span> aborda num webinar a ter lugar no próximo dia 30 de junho entre as 10h00 e as 11h30, onde serão apresentadas as plataformas online de apoio à reabilitação, desenvolvidas no âmbito deste projeto, nos países europeus parceiros. As experiências adquiridas, as boas práticas adotadas e como passar da teoria à ação, são alguns dos tópicos que o consórcio do projeto irá partilhar.</p>

          <p class="ubuntu-light">As entidades responsáveis pela definição e gestão destas plataformas online são as anfitriãs desta sessão, onde irão apresentar as suas experiências e os principais desafios encontrados ao longo do processo. São na sua maioria agências de energia nacionais, que gerem os Sistemas Nacionais de Certificação Energética de Edifícios de cada país parceiro, o que lhes permite tirar partido do leque de informação disponível nestes sistemas e assim melhor fundamentar os conteúdos destas plataformas online.</p>

          <p class="ubuntu-light">A ADENE - Agência para a Energia participa neste projeto com mais 11 parceiros a maioria dos quais Agências de <span class="medium-green">Energia da Rede Europeia </span>(EnR).</p>
        </div>
        
        <div class="col-sm-12 ubuntu-regular video-area">
          <div class="row video">
            <div class="videoWrapper">
              <iframe width="560" height="349" src="http://www.youtube.com/embed/n_dZNLr2cME?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>

          

          <div class="row">
            <label class="title-label">A quem poderá interessar?</label>
            <p>Profissionais na área da reabilitação energética de edifícios, associações do sector e decisores políticos que queiram replicar esta experiência na sua área de atuação.</p>
            <p>O webinar é organizado pela equipa do projeto Request 2 Action e moderada pelo líder do consórcio o EST – Energy Saving Trust (congénere da ADENE- Agência para a Energia no Reino Unido).</p>
            <p>A participação é gratuita após registo.
            Nota: Após o registo, o participante receberá um e-mail de confirmação para aceder ao webinar.</p>
            <p>Junte-se à equipa do Request 2 Action e conheça as ferramentas desenvolvidas para dinamizar o mercado da reabilitação urbana e eficiência energética dos edifícios em Portugal, Reino Unido, Áustria, Bélgica, Grécia e Itália.</p>
          </div>

        </div>
      </div>


      <div class="col-sm-4 sidebar">
        <h4 class="medium-green ubuntu-regular">Pesquisar</h4>
        <div class="input-group stylish-input-group main-search">
          <input type="text" class="form-control"  placeholder="Insira palavra chave para pesquisar" >
          <span class="input-group-addon">
            <button type="submit">
              <span class="glyphicon glyphicon-search"></span>
            </button>  
          </span>
        </div>
        <ul class="sidebar-links dark-grey ubuntu-regular">
          <li><a href="#"><b>Notícias Adene</b></a></li>
          <li><a href="#"><b>Comunicados de Imprensa</b></a></li>
          <li><a href="#"><b>Galeria de Imagens</b></a></li>
        </ul> 

        <h4 class="medium-green ubuntu-regular">Arquivo</h4>
        <ul class="sidebar-links dark-grey ubuntu-regular">
          <li><a href="#">2017</a></li>
          <li><a href="#">2016</a></li>
          <li><a href="#">2015</a></li>
          <li><a href="#">2014</a></li>
          <li><a href="#">2013</a></li>
          <li><a href="#">2012</a></li>
        </ul>
        <h4 class="medium-green text-uppercase sidebar-title ubuntu-regular">Notícias mais lidas</h4>
       
        <div class="list-group">
          <a href="#" class="list-group-item">
            <div class="media col-md-4">
              <figure class="pull-left">
                  <img class="media-object img-responsive" src="{{ asset('images/temp/thumb01.jpg')}}" alt="thumb" >
              </figure>
            </div>
            <div class="col-md-8">
              <h4 class="list-group-item-heading"> Lorem ipsum dolor sit amen</h4>
              <p class="list-group-item-text">Dezembro 5, 2016</p>
            </div>
          </a>
          <a href="#" class="list-group-item">
            <div class="media col-md-4">
              <figure class="pull-left">
                  <img class="media-object img-responsive" src="{{ asset('images/temp/thumb02.jpg')}}" alt="thumb" >
              </figure>
            </div>
            <div class="col-md-8">
              <h4 class="list-group-item-heading"> Lorem ipsum dolor sit amen</h4>
              <p class="list-group-item-text">Dezembro 5, 2016</p>
            </div>
          </a>
          <a href="#" class="list-group-item">
            <div class="media col-md-4">
              <figure class="pull-left">
                  <img class="media-object img-responsive" src="{{ asset('images/temp/thumb03.jpg')}}" alt="thumb" >
              </figure>
            </div>
            <div class="col-md-8">
              <h4 class="list-group-item-heading"> Lorem ipsum dolor sit amen</h4>
              <p class="list-group-item-text">Dezembro 5, 2016</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

@endsection