function getClima() {

    $.ajax({
        method: 'get',
        crossDomain: true,
        url: 'http://api.openweathermap.org/data/2.5/weather?id=3468879&appid=3af5f0dc0b125a773f61ff688a6c14e1',
        dataType: 'json',
        success: function (data) {

            descricao = traduzirDescricao(data.weather[0].description);
            $('#situacao').html(descricao);

            temperatura = data.main.temp - 273;
            var tempFormatadada = temperatura.toFixed(2).split('.');
            $('#temperatura').html(tempFormatadada + "º");

            $('#pressaoAr').html(data.main.pressure);

            $('#umidade').html(data.main.humidity);
            
            var dataAmanhecer = new Date(data.sys.sunrise*1000);
            var descDataAmanhecer = 
            dataAmanhecer.getHours()+':'+dataAmanhecer.getMinutes();
            $('#amanhacer').html(descDataAmanhecer);
            
            var dataPorDoSol = new Date(data.sys.sunset*1000);
            var descDataPorDoSol = 
            dataPorDoSol.getHours()+':'+dataPorDoSol.getMinutes();
            $('#pordosol').html(descDataPorDoSol);

            var icone = data.weather[0].icon;
            var caminhoIcone = 'img/icones/'+icone+'.png';
            $('#icone').attr('src', caminhoIcone);
            
        },
        error: function (argument) {
            alert('Falha ao obter dados!');
        }
    });

}

function traduzirDescricao(descricao) {

    descricaoTraduzida = "";

    if (descricao == "clear sky") {
        descricaoTraduzida = "Céu limpo";
    } else if (descricao == "few clouds") {
        descricaoTraduzida = "Poucas nuvens";
    } else if (descricao == "broken clouds") {
        descricaoTraduzida = "Parcialmente nublado";
    }

    return descricaoTraduzida;

}

window.onload = function () {
    getClima();
};