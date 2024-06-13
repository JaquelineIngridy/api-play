
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Musica Play</title>
  <link rel="stylesheet" href="{{ asset('assets/css/custon.css')}}">
</head>
<body>
  <div class="container">
    <div class="card-player">
      <div class="conteudo-musica">
        <img src="https://imgs.search.brave.com/YIzdZm0GF8R9Hqcxc2DPAC8me-THWbvqlTCK2aPsL0k/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NTFCM0dLSXFPRkwu/anBn" alt="" id="capaMusica" class="capa-musica">
        <div class="desc-musica">
          <p id="tituloMusica">I wanna be yours</p>
          <span id="artistaMusica">Arctic monkeys</span>
        </div>
      </div>
      <div class="controles">
        <button id="voltar"><img src="https://cdn-icons-png.flaticon.com/128/6364/6364385.png" alt="voltar"></button>
        <button id="play"><img src="https://cdn-icons-png.flaticon.com/128/5577/5577228.png" alt="play"></button>
        <button id="pause" class="hide"><img src="https://cdn-icons-png.flaticon.com/128/3334/3334346.png" alt="pause"></button>
        <button id="avancar"><img src="https://cdn-icons-png.flaticon.com/128/7175/7175261.png" alt="avancar"></button>
      </div>
      <div class="container-progresso">
        <input id="progressBar" type="range" value="0" min="0" max="100" step="1">
      </div>
      <div class="tempo-musica">
        <span id="tempoAtual">00:00</span>
        <span id="tempoTotal">03:03</span>
      </div>
    </div>
  </div>
  <script src="./script.js"></script>
</body>
</html>

