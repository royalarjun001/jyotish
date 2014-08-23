<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Rashi\Object;

use Jyotish\Tattva\Jiva\Manusha;
use Jyotish\Tattva\Maha\Bhuta;
use Jyotish\Tattva\Ayurveda\Prakriti;

/**
 * Class of rashi 8.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class R8 extends \Jyotish\Rashi\Rashi {
	/**
	 * Devanagari title 'vrishchika' in transliteration.
	 * 
	 * @var array
	 * @see Jyotish\Alphabet\Devanagari
	 */
	protected $rashiTranslit = array(
		 'va','r','sha','virama','ca','i','ka'
	);
	
	/**
	 * Unicode of rashi.
	 * 
	 * @var string
	 */
	protected $rashiUnicode = '264F';
	
	/**
	 * Bhava of rashi.
	 * 
	 * @var string
	 * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 5-5 1/2.
	 */
	protected $rashiBhava = self::BHAVA_STHIRA;
	
	/**
	 * Bhuta of rashi.
	 * 
	 * @var string
	 */
	protected $rashiBhuta = Bhuta::BHUTA_JALA;
	
	/**
	 * Gender of rashi.
	 * 
	 * @var string
	 * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 5-5 1/2.
	 */
	protected $rashiGender = Manusha::GENDER_FEMALE;
	
	/**
	 * Limb of Kaal Purush.
	 * 
	 * @var string
	 * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 4-4 1/2.
	 */
	protected $rashiLimb = Manusha::LIMB_PRIVITIES;
	
	/**
	 * Prakriti of rashi.
	 * 
	 * @var string
	 * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 4, Verse 5-5 1/2.
	 */
	protected $rashiPrakriti = Prakriti::PRAKRITI_KAPHA;

	public function __construct($options) {
		return $this;
	}

}