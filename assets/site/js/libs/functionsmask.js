$(document).ready(function(){
//variáveis para máscaras em campos de formulários.
        var $seuCampoHora = $(".campoHora");
        $seuCampoHora.mask('00:00');
        var $seuCampoCPF = $(".campoCPF");
        $seuCampoCPF.mask('000.000.000-00');        
        var $seuCampoData = $(".campoData");
        $seuCampoData.mask('00/00/0000');
        var $seuCampoRG = $(".campoRG");
        $seuCampoRG.mask('0000000');
        var $seuCampoTel = $(".campoTel");
        $seuCampoTel.mask('(00)0000-0000');
        var $seuCampoCel = $(".campoCel");
        $seuCampoCel.mask('(00)00000-0000');
        var $seuCampoMoeda = $(".moeda");
        $seuCampoMoeda.mask('000.000.000.000.000,00', {reverse: true});
        var $seuCampoCnpj = $(".campoCnpj");
        $seuCampoCnpj.mask('00.000.000/0000-00');
        var $seuCampoCep = $(".campoCep");
        $seuCampoCep.mask('00000-000');
});