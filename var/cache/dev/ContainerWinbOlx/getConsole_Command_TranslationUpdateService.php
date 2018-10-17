<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_update' shared service.

$a = new \Symfony\Component\Translation\Writer\TranslationWriter();
$a->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
$a->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
$a->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
$a->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
$a->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
$a->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
$a->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
$a->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
$a->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
$a->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
$a->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

$this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($a, ($this->privates['translation.reader'] ?? $this->load('getTranslation_ReaderService.php')), ($this->privates['translation.extractor'] ?? $this->load('getTranslation_ExtractorService.php')), 'fr', '/application/translations', '/application/templates');

$instance->setName('translation:update');

return $instance;
