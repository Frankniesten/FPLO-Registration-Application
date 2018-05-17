{extends file="layout.tpl"}

{block name=pageContent}
<br>
<br>
<div class="jumbotron">
  <h1 class="display-4">Welkom!</h1>
  <p class="lead">Je account is succesvol aangemaakt. Klik op onderstaande button om definitief in te loggen op de SURF pilot modulaire leeromgeving.</p>
  <p class="lead">
    <a class="btn btn-default btn-lg" href="https://www.pilot.fplo.surfnet.nl" role="button">Aan de slag</a>
  </p>
</div>
<iframe src="h{$logout_url}" width="1px" height="1px" frameborder="0"></iframe>
{/block}


