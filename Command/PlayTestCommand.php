<?php

declare(strict_types=1);

namespace MauticPlugin\MauticPlaygroundBundle\Command;

use Mautic\CoreBundle\Templating\Helper\TranslatorHelper;
use Mautic\PluginBundle\Helper\IntegrationHelper;
use MauticPlugin\MauticCrmBundle\Api\PipedriveApi;
use MauticPlugin\MauticCrmBundle\Integration\PipedriveIntegration;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class PlayTestCommand extends ContainerAwareCommand
{
    private SymfonyStyle $io;
    private IntegrationHelper $integrationHelper;
    private TranslatorHelper $translatorHelper;

    public function __construct(
        IntegrationHelper $integrationHelper,
        TranslatorHelper $translatorHelper
    ) {
        $this->integrationHelper = $integrationHelper;
        $this->translatorHelper  = $translatorHelper;

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('mz:play:test')
            ->setDescription('Test command');


        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getContainer();
        $this->io  = new SymfonyStyle($input, $output);
        // $this->io->warning(PipedriveIntegration::DEPRECATION_MESSAGE);

        // $logger = $container->;
        

        $this->io->success('Execution time: ');
    }


}
