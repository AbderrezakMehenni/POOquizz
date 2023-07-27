<?php
require_once 'class/Qcm.php';
require_once 'class/Question.php';
require_once 'class/Answer.php';

$qcm = new Qcm();

$question1 = new Question('Qu\'est ce qui est jaune et qui attends ?');
$question1->addAnswer(new Answer('Des dents qui attendent d\'être brossé'));
$question1->addAnswer(new Answer('Jonhathan'));
$question1->addAnswer(new Answer('Un tram STIB', Answer::bonne_reponse));
$question1->addAnswer(new Answer('Un chinois chez le médecin'));

$qcm->addQuestion($question1);

$qcm->generate();