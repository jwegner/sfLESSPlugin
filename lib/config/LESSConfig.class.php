<?php

/*
 * This file is part of the sfLESSPlugin.
 * (c) 2010 Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfLESSConfig is configuration manager.
 *
 * @package    sfLESSPlugin
 * @subpackage lib
 * @author     Konstantin Kudryashov <ever.zet@gmail.com>
 * @version    1.0.0
 */
class LESSConfig
{
  /**
   * Do we need to check dates before compile
   *
   * @var boolean
   */
  protected $checkDates;

  /**
   * Do we need compression for CSS files
   *
   * @var boolean
   */
  protected $useCompression;

  /**
   * Creates config instance
   *
   * @param   boolean   $checkDates     whether we check dates before compile
   * @param   boolean   $useCompression whether we compress result styles
   */
  public function __construct($checkDates = true, $useCompression = false)
  {
    $this->checkDates     = $checkDates;
    $this->useCompression = $useCompression;
  }

  /**
   * Do we need to check dates before compile
   *
   * @return  boolean
   */
  public function isCheckDates()
  {
    return $this->checkDates;
  }

  /**
   * Set need of check dates before compile
   *
   * @param   boolean $checkDates Do we need to check dates before compile
   */
  public function setIsCheckDates($checkDates)
  {
    $this->checkDates = $checkDates;
  }

  /**
   * Do we need compression for CSS files
   *
   * @return  boolean
   */
  public function isUseCompression()
  {
    return $this->useCompression;
  }

  /**
   * Set need of compression for CSS files
   *
   * @param   boolean $useCompression Do we need compression for CSS files
   */
  public function setIsUseCompression($useCompression)
  {
    $this->useCompression = $useCompression;
  }

  /**
   * Returns paths to CSS files
   *
   * @return  string  a path to CSS files directory
   */
  public function getCssPaths()
  {  
    return 'web/css/';
  }

  /**
   * Returns paths to LESS files
   *
   * @return  string  a path to LESS files directories
   */
  public function getLessPaths()
  {
    return 'web/less/';
  }

  /**
   * Returns debug info of the current state
   *
   * @return  array state
   */
  public function getDebugInfo()
  {
    return array(
      'dates'       => var_export($this->isCheckDates(), true),
      'compress'    => var_export($this->isUseCompression(), true),
      'less'        => $this->getLessPaths(),
      'css'         => $this->getCssPaths()
    );
  }
}
