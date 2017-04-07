<?php

namespace App;

/**
 * Class View
 * @package App
 */

class View implements \Countable, \Iterator
{	
	
	use ViewMagic;
	
	protected $data=[];

    /**
     * @param $templates
     * @return string
     */
	public function render($templates)
	{
		ob_start();
		foreach($this as $key => $value)
		{
			$$key = $value;
		}
		
		include $templates;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
		
	}

    /**
     * @param $templates string
     */
	public function display($templates)
	{
		echo $this->render($templates);
	}
	
	public function count()
	{
		return count($this->data);
	}

    /**
     * Возвращает итератор на первый элемент
     */
    public function rewind()
    {
        reset($this->data);
    }

    /**
     * Текущий элемент
     * @return mixed
     */
    public function current()
    {
        return current($this->data);

    }

    /**
     * Получить ключ
     * @return mixed
     */
    public function key()
    {
        return key($this->data);

    }

    /**
     * Следующий элемент
     * @return mixed
     */
    public function next()
    {
        return next($this->data);

    }

    /**
     * Проверка корректности позиции
     * @return bool
     */
    public function valid()
    {
        $key = key($this->data);
        return (null !== $key && false !== $key);

    }
}