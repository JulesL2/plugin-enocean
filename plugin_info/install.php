<?php
/*
 * This file is part of the NextDom software (https://github.com/NextDom or http://nextdom.github.io).
 * Copyright (c) 2018 NextDom.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, version 2.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

/* Update by Ethal
  Last Updated: MAY 29 2018.
 */


require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';

function openenocean_install() {
	if (config::byKey('api::openenocean::mode') == '') {
		config::save('api::openenocean::mode', 'localhost');
	}
}

function openenocean_update() {
	if (config::byKey('api::openenocean::mode') == '') {
		config::save('api::openenocean::mode', 'localhost');
	}
}

function openenocean_remove() {

}

?>
