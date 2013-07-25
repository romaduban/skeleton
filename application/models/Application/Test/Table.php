<?php
/**
 * Copyright (c) 2013 by Bluz PHP Team
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * @namespace
 */
namespace Application\Test;

/**
 * Table
 *
 * @category Application
 * @package  Test
 *
 * @author   Anton Shevchuk
 * @created  08.07.11 17:36
 */
class Table extends \Bluz\Db\Table
{
    /**
     * Table
     *
     * @var string
     */
    protected $table = 'test';

    /**
     * Primary key(s)
     * @var array
     */
    protected $primary = array('id');

    /**
     * save test row
     *
     * @return boolean
     */
    public function saveTestRow()
    {
        return $this->insert(['name'=>'Example #'.rand(1, 10), 'email'=> 'example@example.com']);
    }

    /**
     * update test row
     *
     * @return boolean
     */
    public function updateTestRows()
    {
        return $this->update(['email'=> 'example2@example.com'], ['email'=> 'example@example.com']);
    }

    /**
     * delete test row
     *
     * @return boolean
     */
    public function deleteTestRows()
    {
        return $this->delete(['email'=> 'example2@example.com']);
    }
}
