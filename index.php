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
		return $this->categoria->getMyCategory();
	}

	public function showCompleteArticle()
	{
		$article = '<article>';
		$article .= '<h3>' . htmlspecialchars($this->titolo, ENT_QUOTES, 'UTF-8') . '</h3>';
		$article .= '<p><strong>Categoria:</strong> ' . $this->getCategoryLabel() . '</p>';
		$article .= '<p><strong>Tag:</strong> ' . htmlspecialchars(implode(', ', $this->tag), ENT_QUOTES, 'UTF-8') . '</p>';
		$article .= '</article><hr>';

		echo $article;
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

