$(document).on('ready',Iniciar);

function Iniciar()
{
	

	$varDistritoCentral=$('#central')
	$varDistritoOccidente=$('#occidente');
	$varDistritoNorOccidente=$('#noroccidente');
	$varDistritoSur=$('#sur');
	$varDistritoOriente=$('#oriente');
	$varDistritoNorOriente=$('#nororiente');
	$varLogin=$('#log');


    $varDistritoCentral.hide();
	$varDistritoOccidente.hide();
	$varDistritoNorOccidente.hide();
	$varDistritoSur.hide();
	$varDistritoOriente.hide();
	$varDistritoNorOriente.hide();
	$varLogin.hide();

	$('#dcentral').on('click',distritoCentral);
	$('#dsur').on('click',distritoSur);
	$('#doccidente').on('click',distritoOccidente);
	$('#doriente').on('click',distritoOriente);
	$('#dnocc').on('click',distritoNorOccidente);
	$('#dnoro').on('click',distritoNorOriente);
	$('#dnorte').on('click',distritoNorte);


	$('#central').on('click',Central);
	$('#occidente').on('click',Occidente);
	$('#noroccidente').on('click',Noroccidente);
	$('#sur').on('click',Sur);
	$('#oriente').on('click',Oriente);
	$('#nororiente').on('click',Nororiente);

}

function distritoCentral()
{
	$varDistritoCentral.show();
	$varDistritoOccidente.hide();
	$varDistritoNorOccidente.hide();
	$varDistritoSur.hide();
	$varDistritoOriente.hide();
	$varDistritoNorOriente.hide();
	$varLogin.hide();
}
 function distritoSur()
 {
 	$varDistritoCentral.hide();
	$varDistritoOccidente.hide();
	$varDistritoNorOccidente.hide();
	$varDistritoSur.show();
	$varDistritoOriente.hide();
	$varDistritoNorOriente.hide();
	$varLogin.hide();
 }

function distritoOccidente()
{
	$varDistritoCentral.hide();
	$varDistritoOccidente.show();
	$varDistritoNorOccidente.hide();
	$varDistritoSur.hide();
	$varDistritoOriente.hide();
	$varDistritoNorOriente.hide();
	$varLogin.hide();


}

function distritoOriente()
{
    $varDistritoCentral.hide();
	$varDistritoOccidente.hide();
	$varDistritoNorOccidente.hide();
	$varDistritoSur.hide();
	$varDistritoOriente.show();
	$varDistritoNorOriente.hide();
	$varLogin.hide();

}

function distritoNorOccidente()
{
    $varDistritoCentral.hide();
	$varDistritoOccidente.hide();
	$varDistritoNorOccidente.show();
	$varDistritoSur.hide();
	$varDistritoOriente.hide();
	$varDistritoNorOriente.hide();
	$varLogin.hide();

}

function distritoNorOriente()
{
	$varDistritoCentral.hide();
	$varDistritoOccidente.hide();
	$varDistritoNorOccidente.hide();
	$varDistritoSur.hide();
	$varDistritoOriente.hide();
	$varDistritoNorOriente.show();
	$varLogin.hide();

}

function distritoNorte()
{
	$varLogin.show();
	$varDistritoCentral.hide();
	$varDistritoOccidente.hide();
	$varDistritoNorOccidente.hide();
	$varDistritoSur.hide();
	$varDistritoOriente.hide();
	$varDistritoNorOriente.hide();
}
function Central()
{
	$varLogin.show();

}

function Occidente()
{
	$varLogin.show();
}

function Sur()
{
	$varLogin.show();
}

function Noroccidente()
{
$varLogin.show();
}

function Oriente()
{
$varLogin.show();
}
function Nororiente()
{
	$varLogin.show();
}



	
