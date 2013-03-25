<?php


class Thread
{
	public $id = null;
	
	public $postDate = null;
	
	public $title = null;
	
	public $originalPoster = null;
	
	public $locked = null;
	
	public function_construct($data = array())
	{
		if(isset($data['id']))
		{
			$this->id = (int) $data['id'];
		}
		if(isset($data['postDate']))
		{
			$this->id = (int) $data['postDate'];
		}
		if(isset($data['title'))
		{
			$this->title = preg_replace( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['title'] );
		}
		if(isset($data['originalPoster'])
		{
			$this->originalPoster = preg_replace( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['originalPoster'] );
		}
		if(isset($data['locked'])
		{
			$this->locked = (bool)$data['locked'];
		}
	}
	public function storeThreadValues($params)
	{
		$this->_construct($params);
	
		if(isset($params['postDate']))
		{
			$postDate = explode('-', $params['publicationDate']);
			
			if(count($postDate) == 3)
			{
				list($y,$m,$d) = $postDate;
				$this->postDate = mktime(0,0,0,$m,$d,$y);
		
			}
		}
	}
	
	public static function getById($id)
	{
		$conn = new PDO("localhost","root","Gwhnsf@76244");
		$sql = "SELECT *, UNIX_TIMESTAMP(postDate) AS postDate from Threads WHERE id = :id";
		$st = $conn->prepare($sql);
		$st->bindValue(":id", $id, PDO::PARAM_INT);
		$st->execute();
		$row = $st->fetch();
		$conn = null;
		if($row)return new Thread($row);
	}
	
	public static function getList( $numRows=1000000, $order="postDate DESC")
	{
		$conn = new PDO("localhost","root","Gwhnsf@76244");
		 $sql = "SELECT SQL_CALC_FOUND_ROWS *, UNIX_TIMESTAMP(postDate) AS postDate FROM Threads
            ORDER BY " . mysql_escape_string($order) . " LIMIT :numRows";

    $st = $conn->prepare( $sql );
    $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
    $st->execute();
    $list = array();

    while ( $row = $st->fetch() )
	{
      $thread = new Thread( $row );
      $list[] = $thread;
    }

 
    $sql = "SELECT FOUND_ROWS() AS totalRows";
    $totalRows = $conn->query( $sql )->fetch();
    $conn = null;
    return ( array ( "results" => $list, "totalRows" => $totalRows[0] ) );
	
	}
	public function insert()
	{
		 if ( !is_null( $this->id ) ) trigger_error ( "Article::insert(): Attempt to insert an Article object that already has its ID property set (to $this->id).", E_USER_ERROR );

    $conn = new PDO("localhost","root","Gwhnsf@76244");
    $sql = "INSERT INTO Threads ( postDate, title, originalposter, locked) VALUES ( FROM_UNIXTIME(:postDate), :title, :originalposter, :locked )";
    $st = $conn->prepare ($sql);
    $st->bindValue( ":postDate", $this->postDate, PDO::PARAM_INT );
    $st->bindValue( ":title", $this->title, PDO::PARAM_STR );
    $st->bindValue( ":originalposter", $this->originalposter, PDO::PARAM_STR );
    $st->bindValue( ":locked", $this->content, PDO::PARAM_BOOL );
    $st->execute();
    $this->id = $conn->lastInsertId();
    $conn = null;
	
	
	}
	
	public function update()
	{
		  if (is_null($this->id)) trigger_error ("Thread::update(): Attempt to update a Thread object that does not have its ID property set.", E_USER_ERROR);
   
    $conn = new PDO("localhost","root","Gwhnsf@76244");
    $sql = "UPDATE threads SET publicationDate=FROM_UNIXTIME(:publicationDate), title=:title, summary=:summary, content=:content WHERE id = :id";
    $st = $conn->prepare ( $sql );
    $st->bindValue( ":publicationDate", $this->publicationDate, PDO::PARAM_INT );
    $st->bindValue( ":title", $this->title, PDO::PARAM_STR );
    $st->bindValue( ":summary", $this->summary, PDO::PARAM_STR );
    $st->bindValue( ":content", $this->content, PDO::PARAM_STR );
    $st->bindValue( ":id", $this->id, PDO::PARAM_INT );
    $st->execute();
    $conn = null;
	
	}
	
	public function delete()
	{
		if (is_null($this->id)) trigger_error ( "Thread::delete(): Attempt to delete a Thread object that does not have its ID property set.", E_USER_ERROR );

    // Delete the Article
    $conn = new PDO("localhost","root","Gwhnsf@76244");
    $st = $conn->prepare ( "DELETE FROM threads WHERE id = :id LIMIT 1" );
    $st->bindValue( ":id", $this->id, PDO::PARAM_INT );
    $st->execute();
    $conn = null;
	
	}
}