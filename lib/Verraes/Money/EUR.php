<?php
/**
 * This file is part of the Verraes\Money library
 *
 * Copyright (c) 2011 Mathias Verraes
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Verraes\Money;

class EUR implements Currency
{
	/**
	 * @return string
	 */
	public function getName()
	{
		return 'EUR';
	}

	/**
	 * @return  bool
	 */
	public function equals(Currency $currency)
	{
		return $this->getName() == $currency->getName();
	}
}
