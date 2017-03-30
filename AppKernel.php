<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
  public function registerBundles()
  {
    $bundles = array(
      new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
      new \Symfony\Bundle\TwigBundle\TwigBundle(),
      new \Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
      new \Symfony\Bundle\MonologBundle\MonologBundle(),
      new \AppBundle\AppBundle()
    );
    return $bundles;
  }

  public function registerContainerConfiguration(LoaderInterface $loader)
  {
    $loader->load(__DIR__.'/config/config.yml');
  }

  public function getCacheDir()
  {
    return dirname(__FILE__).'/var/cache/'.$this->getEnvironment();
  }

  public function getLogDir()
  {
    return dirname(__FILE__).'/var/logs';
  }
}