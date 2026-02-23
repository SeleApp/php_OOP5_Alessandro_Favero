<?php

require_once __DIR__ . '/class.php';

class Post
{
	private $titolo;
	private $categoria;
	private $tag;

	public function __construct($titolo, Category $categoria, array $tag)
	{
		$this->titolo = $titolo;
		$this->categoria = $categoria;
		$this->tag = $tag;
	}

	private function getCategoryLabel()
	{
		ob_start();
		$this->categoria->getMyCategory();
		return trim(ob_get_clean());
	}

	public function showCompleteArticle()
	{
		echo '<h3>' . $this->titolo . '</h3>';
		echo '<p><strong>Categoria:</strong> ' . $this->getCategoryLabel() . '</p>';
		echo '<p><strong>Tag:</strong> ' . implode(', ', $this->tag) . '</p>';
		echo '<hr>';
	}
}

$posts = [
	new Post('Le notizie del giorno', new Attualita(), ['news', 'italia']),
	new Post('Risultati della domenica', new Sport(), ['calcio', 'serie-a']),
	new Post('Retroscena dal mondo VIP', new Gossip(), ['celebrità', 'tv']),
	new Post('La Roma antica in breve', new Storia(), ['impero-romano', 'cultura']),
];

foreach ($posts as $post) {
	$post->showCompleteArticle();
}

