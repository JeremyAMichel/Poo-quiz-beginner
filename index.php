<?php

require_once('utils/loadClass.php');
require_once('utils/db_connect.php');

// $qcm = new Qcm();

// // On crée notre question 1
// $question1 = new Question('POO signifie :');

// $question1->addAnswer(new Answer('Php Orienté Objet'));
// $question1->addAnswer(new Answer('ProgrammatiOn Orientée Outil'));
// $question1->addAnswer(new Answer('Programmation Orientée Objet', true));
// $question1->addAnswer(new Answer('Papillon Onirique Ostentatoire'));


// // On crée notre question 2
// $question2 = new Question('Qui était mozart :');

// $question2->addAnswer(new Answer('le bassiste de MJ'));
// $question2->addAnswer(new Answer('un boulanger'));
// $question2->addAnswer(new Answer('Auteur/compositeur', true));
// $question2->addAnswer(new Answer('un astre'));


// // On set les explications
// $question1->setExplanation('Sans commentaires si vous avez eu faux :-°');
// $question2->setExplanation('blabla');


// // On ajoute les questions au qcm
// $qcm->addQuestion($question1);
// $qcm->addQuestion($question2);

// // On affiche le qcm dans l'ordre suivant :
// // D'abord on accède au tableau de questions du qcm pour boucler dedans avec un foreach
// // -> On affiche l'intitulé de la question
// // Puis on accède au tableau de réponses de chaque queston pour boucler dedans
// // -> On affiche le texte de chaque réponse
// $qcm->generate();


$qcm = new Qcm($bdd);
$qcm->selectQuestions();

$qcm->generate();

