<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"> 
    <a href="https://icons8.com/icon/99991/divisa-para-baixo"></a>
    <title>Lília de Tássia - Tema</title>
</head>
<body>
<section class="topo">
    <div class="center">
        <header>
          <div class="logo"><img src="images/logo.png" /></div><!-- logo --->
        </header>   
        <ul class="menu-dekstop">
           <li><a href="#">Home</a></li>
           <li><a href="#">Sobre</a></li>
           <li><a href="#">Contato</a></li>
        </ul><!-- menu-dekstop --->
        <div class="clear"></div><!-- clear --->
        <br/>
        <br/>
        <div class="w50 time-descricao">
        <h2>Melhore a comunicação com o seu cliente e time.</h2>
        <p>Consultoria especializada em startups,empresas,principalmente pessoas.</p>
        <a  target="_blank" href="#">Ver demonstração</a>
        </div><!-- w50 --->
        <div class="w50 time-imagem">
            <img src="images/equipe.png"/>
        </div><!-- w50 --->  
        <div class="clear"></div>  
    </div><!-- center --->
</section><!-- topo --->
<div class="circle">
    <img  src="https://img.icons8.com/ios-glyphs/30/000000/chevron-down.png"/>
</div>
<section class="clientes-slider">

<div class="center">
</div><!-- center --->
</section>

<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>
<script type="text/javascript">
    $('.section.clientes-slider .slider-container').slick({
      dots: true,
      arrows:false,
      infinite: true,
      centerMode: true,
      centerPadding:0,
      speed:1000,
      slidesToShow: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      pauseOnHover:false
      responsive: 
	    [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2
	      }
	    }
	    ]
	});
</script>
</body>
</html>
















