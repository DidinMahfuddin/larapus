<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $fillable = ['name'];

    public function books()
    {
    	parent::boot();

    	self::deleting(function($author){
    		if ($author->book->count()>0) {
    			$html = 'Penulis tidak bisa dihapus karena masih memiliki buku : ';
    			$html = '<ul>';
    			foreach ($author->books as $book) {
    				$html = "<li> $book->title </li>";
    			}
    			$html = '</ul>';

    			Session::flash("flash_notification",[
    				"level"=>"danger",
    				"message"=>$html]);
    			return false;
    		}
    	});
    	return $this->hasMany('App\Book');
    }
}
