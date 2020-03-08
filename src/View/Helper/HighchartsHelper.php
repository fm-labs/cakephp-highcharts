<?php

namespace Highcharts\View\Helper;

use Cake\View\Helper;

/**
 * Highcharts Helper
 *
 * @property \Cake\View\Helper\HtmlHelper $Html
 */
class HighchartsHelper extends Helper
{
    protected $_defaultConfig = [
        //'scriptUrl' => '//code.highcharts.com/highcharts.js',
        'scriptUrl' => '/highcharts/lib/highcharts/6.1.1/highcharts.js',
        'block' => true,
    ];

    public $helpers = ['Html'];

    /**
     * {@inheritDoc}
     */
    public function initialize(array $config)
    {
        $this->Html->script($this->getConfig('scriptUrl'), ['block' => $this->getConfig('block')]);
    }
}
