<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller{
    public function homepage(){
        return view('welcome');
    }
    
    public function homepage2(){
        return view('welcome');
    }
    
    public function chisiamo(){
        $users = [
            ['name'=> 'Sandro', 'surname'=>'Bassetta', 'role'=>'Direttore dei lavori'],
            ['name'=> 'Giovanni', 'surname'=>'Bottai', 'role'=>'Idraulico'],
            ['name'=> 'Danilo', 'surname'=>'Fraschini', 'role'=>'Elettricista'],
            ['name'=> 'Annalisa', 'surname'=>'Giovannini', 'role'=>'Piastrellista'],
            ['name'=> 'Stefano', 'surname'=>'Rulli', 'role'=>'Architetto'],
            ['name'=> 'Roberta', 'surname'=>'De Vinci', 'role'=>'Autista'],
            ['name'=> 'Sara', 'surname'=>'Marchetti', 'role'=>'Responsabile Logistica']
        ];
        return view('pagina1', ['users'=>$users]);
    }

    public function chisiamodetail($name){
    $users = [
        ['name'=> 'Sandro', 'surname'=>'Bassetta', 'role'=>'Direttore dei lavori'],
        ['name'=> 'Giovanni', 'surname'=>'Bottai', 'role'=>'Idraulico'],
        ['name'=> 'Danilo', 'surname'=>'Fraschini', 'role'=>'Elettricista'],
        ['name'=> 'Annalisa', 'surname'=>'Giovannini', 'role'=>'Piastrellista'],
        ['name'=> 'Stefano', 'surname'=>'Rulli', 'role'=>'Architetto'],
        ['name'=> 'Roberta', 'surname'=>'De Vinci', 'role'=>'Autista'],
        ['name'=> 'Sara', 'surname'=>'Marchetti', 'role'=>'Responsabile Logistica']
    ];
    foreach($users as $user){
        if($name == $user['name']){
            return view('chisiamo-detail', ['user'=>$user]);
        }
    };
}

public function servizi (){
    $services = [
        ['id'=> '1', 'tipologia'=> 'Predisposizione impianto idraulico', 'descrizione'=>'La nostra azienda si occupa di predisporre e installare impianti idraulici di nuova generazione, o di rinnovare quelli già presenti in base alle vigenti normative.', 'img'=>'/media/idraulico.jpg'],
        ['id'=> '2', 'tipologia'=>'Progettazione impianto elettrico', 'descrizione'=>'La progettazione degli impianti elettrici rientra tra le prime attività nel progetto di ristrutturazione,e noi la curiamo in ogni dettaglio.', 'img'=>'/media/elettrico.jpg'],
        ['id'=> '3', 'tipologia'=>'Design domotica e punti luce', 'descrizione'=>'Per vivere la casa dei tuoi sogni, noi la aggiorneremo con le ultime tecnologie di domotica e luce, integrate con intelligenza artificale.', 'img'=>'/media/domotica.jpg'],
        ['id'=> '4', 'tipologia'=>'Trasporto materiali e impalcature', 'descrizione'=>'La nostra azienda si prenderà cura di tutti i materiali e di tutti gli strumenti necessari al lavoro, dal deposito in magazzino, al trasporto e alla consegna in caso di rivendita.', 'img'=>'/media/trasporto.jpg'],
        ['id'=> '5', 'tipologia'=>'Consulenza di interior design', 'descrizione'=>'I nostri architetti e consulenti di interior design saranno a vostra completa disposizione per disegnare la abitazione dei vostri sogni.', 'img'=>'/media/interiordesign.jpg']
    ];
    return view('pagina2', ['services'=>$services]);
}

public function contactUs(Request $request)
{
 $user = $request->input('user');
 $email = $request->input('email');
 $message = $request->input('message');

 Mail::to($email)->send(new ContactMail());
 return back()->with('emailSent', 'Mail correttamente inviata');

}

};
