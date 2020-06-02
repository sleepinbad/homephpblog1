<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public $error;

	public function contactValidate($post) {
		$nameLen = iconv_strlen($post['name']);
		$textLen = iconv_strlen($post['text']);
		if ($nameLen < 2 or $nameLen > 20) {
			$this->error = 'Name should have from 2 to 20 characters';
			return false;
		} elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error = 'E-mail isn`t correct, example: blog@gmail.com';
			return false;
		} elseif ($textLen < 10 or $textLen > 500) {
			$this->error = 'Message must have from 10 to 500 characters';
			return false;
		}
		return true;
	}

	public function postsCount() {
		return $this->db->column('SELECT COUNT(id) FROM posts');
	}

	public function postsList($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
	}

}