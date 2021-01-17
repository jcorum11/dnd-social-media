@extends ("layouts.app")

@section ("content")
<div class="container py-5">
  <div class="row justify-content-center">
    <h1>Players</h1>
  </div>
  <div class="row">
    <div class="col ml-5">
      <div class="card" style="width: 18rem;">
        <img src="/images/player-gavinrad-concept.png" class="card-img-top" alt="gavinrad portrait">
        <div class="card-body">
          <h5 class="card-title">Gavinrad Goldenfist</h5>
          <p class="card-text">Backpack, Bedroll, mess kit, tinderbox, Torch (10), Rations (10 days), Waterskin, Rope (50ft), Black Ink, Quill, Small Knife, A Letter from a Dead Collegue (unanswered question)</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Human</li>
          <li class="list-group-item">Paladin</li>
          <li class="list-group-item">Noble</li>
        </ul>
        <div class="card-body">
          <a href="/images/gavinrad-character-sheet.pdf" class="card-link" target="_blank">Link to Gavinrad's Character Sheet</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="/images/player-sinesa-concept.png" class="card-img-top" alt="sinesa portrait">
        <div class="card-body">
          <h5 class="card-title">Sini&scaron;a</h5>
          <p class="card-text">Backpack, Bedroll, mess kit, tinderbox, Torch (10), Rations (10 days), Waterskin, Rope (50ft), Black Ink, Quill, Small Knife, A Letter from a Dead Collegue (unanswered question)</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Tiefling</li>
          <li class="list-group-item">Rogue</li>
          <li class="list-group-item">Sage</li>
        </ul>
        <div class="card-body">
          <a href="/images/sinišaCharacterSheet.pdf" class="card-link" target="_blank">Link to Sini&scaron;a's Character Sheet</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="/images/player-leo-concept.jpg" class="card-img-top" alt="Leonias portrait">
        <div class="card-body">
          <h5 class="card-title">Leonias Berkshire</h5>
          <p class="card-text">Backpack, bedroll, costume (2), candle (5), rations (5), waterskin, disguise kit, Lute, leather armor</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Half-elf</li>
          <li class="list-group-item">Bard</li>
          <li class="list-group-item">Entertainer</li>
        </ul>
        <div class="card-body">
          <a href="/images/Bard.pdf" class="card-link" target="_blank">Link to Leo's Character Sheet</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection