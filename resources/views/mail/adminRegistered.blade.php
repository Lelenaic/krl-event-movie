Nouvelle inscription au Workshop Docker :<br>
Nom : {{$ticket->name}}<br>
Mail : {{$ticket->email}}<br>
Moyen de paiement : {{$ticket->card?'Carte':'Chèque'}}<br>
@if($ticket->card)
    Numéro de transaction : {{$number}}
@endif