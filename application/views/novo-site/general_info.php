<?php

require 'importacoes/header.php';
require 'importacoes/menu.php';

?>
<style type="text/css">
.main{
	padding: unset;
}
</style>
<div>
	<img class="saviani" src="<?= base_url('').'assets/novo-site/imagens/logo_saviani-tamanhooriginal2.png'?>" style="margin-bottom: 10px; border-radius: 5px 0 0 0;">
	<br>
</div>

<div class="container2">
	<div class="row animate fadeIn" id="ginfo">
		<div class="col m5 s12 orn" style="padding-bottom: -50%;">
			<p class="intro brandon_r">INFORMAÇÕES GERAIS</p>
		</div>
		<!-- <div style="margin-top: 5%; margin-bottom: 5%;" class="col m6 offset-m1 s12 center">
			<a class="bt_inscrever brandon_t modal-trigger bt_responsive" href="#info" style="font-size: 22px;">PAGAMENTO DAS INSCRIÇÕES</a>
		</div> -->
		<!-- <div class="col m6 offset-m1 s12" style="padding-bottom: -50%;">
			<h5 class="tw_cent">INSCRIÇÕES</h5>
		</div> -->
	</div>	
	
	<div class="row animate fadeIn" id="ginfo">
		<!-- <div class="col m6 s12">
			<h5 class="tw_cent" style="float: left; text-align: left;">Período do Congresso:
				<br>
				<b>De 11 a 13/07/2018</b>
			</h5>
		</div> -->

		<div class="col m12 s12 ">
			<h5 class="tw_cent">De <b>11 a 13</b> de Julho na cidade de <b>Presidente Prudente</b></h5>
			<h5 class="tw_cent"><a href="<?= base_url('informacoes_gerais') ?>" class="grey-text text-darken-2" style="cursor:pointer;"><b>Local do Evento:</b></a>
				<a href="<?= base_url('informacoes_gerais') ?>" class="grey-text text-darken-2" style="cursor:pointer;">
					FCT-Unesp e Teatro Centro Cultural Matarazzo </a>
			</h5>
		</div>
	</div>

	<div class="modal" id="info">
		<div class="modal-content">
			<p style="text-align: justify;">
				Via depósito bancário e/ou transferência bancária da "Caixa Econômica Federal" conforme os dados:
			</p>
			<table>
				<tr>
					<td>Agência:</td>
					<td>4232</td>
				</tr>
				<tr>
					<td>Operação:</td>
					<td>013 (conta poupança)</td>
				</tr>
				<tr>
					<td>Conta:</td>
					<td>000.000.009.059-4</td>
				</tr>
				<tr>
					<td>Correntista:</td>
					<td>Milene Egea Semensato</td>
				</tr>
			</table>
		</div>
	</div>

	<!-- <p class="apresentacao"> Prof. Dra. Rosiane de Fátima Ponce (FCT/UNESP)</p><br> -->
	<!-- <p class="apresentacao">Prof. Dra Lígia Márcia Martins (FCL/UNESP)</p><br> -->

<!-- <div class="row">
	<div class="col m12 s12">
		<h5 class="tw_cent">Prazo final de submissão dos trabalhos:</h5>
		<h6 class="tw_cent">Até 30/04/2018 <b>(Sem prorrogação de prazo)</b></h6><br>
	</div>
</div>

<div class="row">
	<div class="col m6 s12">
		<h5 class="tw_cent">Prazo final de inscrições <b>(com submissão de trabalhos)</b></h5>
		<h6 class="tw_cent">Até 30/04/2018</h6><br>
	</div>
	<div class="col m6 s12">
		<h5 class="tw_cent">Prazo final de inscrições <b>(sem submissão de trabalhos)</b></h5>
		<h6 class="tw_cent">Havendo vagas disponíveis, até 03/07/2018 <b>(no evento não serão realizadas inscrições)</b></h6><br>
	</div>
</div> -->

<div class="container-fluid">
	<table class="tw_cent">
		<tr style="background-color: #F44336; color: white;">
			<th style="width: 31%"><b>INSCRIÇÕES</b></th>
			<th style="width: 31%">COM SUBMISSÃO DE TRABALHOS</th>
			<th style="width: 32%">SEM SUBMISSÃO DE TRABALHOS</th>
		</tr>
		<tr>
			<th>Prazo Final de Inscrições</th>
			<td><h5>Até 18/05/2018</h5></td>
			<td>Havendo vagas disponíveis, até 30/06/2018<br>
				<b>(no evento não serão realizadas inscrições)</b></td>
			</tr>
		</table>
	</div>

	<!-- <div class="row">
		<div class="col m6 s12" style="border-right: solid #666 1px !important;">
			<h5 class="tw_cent">Período do Congresso:</h5>
			<h6 class="tw_cent">De 11 a 13/07/2017</h6>
		</div>
		<div class="col m6 s12">
			<h5 class="tw_cent">Local do Evento:</h5>
			<h6 class="tw_cent">
				<a style="color: #e60000" href="<?= base_url('informacoes_gerais/#fct_unesp')?>" class="efeito1" title="Ir para local FCT-Unesp">
					FCT/UNESP
				</a> e 
				<a style="color: #e60000" href="<?= base_url('informacoes_gerais/#matarazzo')?>" class="efeito1" title="Ir para local Teatro Centro Cultural Matarazzo">
					Teatro Centro Cultural Matarazzo
				</a>
			</h6>
		</div>
	</div> -->

	<div class="row">
		<div class="col m12 s12" style="margin-top: -3px;">
			<h5 class="tw_cent">COORDENAÇÃO GERAL DO CONGRESSO</h5>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row" style="margin: 0">
			<div class="col m6 s12 center animate fadeIn profile_responsive">
				<ul id="contato">
					<li class="info_profile">
						<a href="#"><img class="circle profile" src="assets/novo-site/imagens/profiles/rosiane.jpg"></a>
					</li>
					<li class="info_profile">
						<h5 class="brandon_r txt_softdarkgrey prof_text">Prof. Dra. Rosiane de Fátima Ponce</h5>
						<h6 style="text-align: left;" id="web_designer" class="brandon_r txt_softdarkgrey">(FCT/UNESP)</h6>
					</li>
				</ul>
			</div>

			<div class="col m6 s12 center animate fadeIn profile_responsive">
				<ul id="contato">
					<li class="info_profile">
						<a href="#">
							<img class="circle profile" src="assets/novo-site/imagens/profiles/ligia.jpg">
						</a>
					</li>
					<li class="info_profile">
						<h5 class="brandon_r txt_softdarkgrey prof_text">Prof. Dra Lígia Márcia Martins</h5>
						<h6 style="text-align: left;" id="web_designer" class="brandon_r txt_softdarkgrey">(FCL/UNESP)</h6>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="modalat" class="modal white-text cyan tw_cent">
    <div class="modal-content">
      <h4>ATENÇÃO</h4>
      <h5>O prazo para submissão de trabalhos foi prorrogado até dia 18/05.</h5>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat float-right white-text right-align right"><i class="material-icons">close</i></a>
    </div>	
  </div>

<?php require 'importacoes/footer.php'; ?>

<script type="text/javascript">
	$(document).ready(function(){
    $('#modalat').modal();
    $('#modalat').modal('open'); 
 });
</script>