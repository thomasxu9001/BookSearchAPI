<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_book_data extends CI_Migration
{

	public function up()
	{
		$data = array(
			array(
				'title' => 'Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones',
				'author' => 'James Clear',
				'description' => 'If you enjoy the articles on this site and you’re looking for a great book, check out my book Atomic Habits. I believe it is the most comprehensive and practical guide on how to optimize your habits and get 1 percent better '
			),
			array(
				'title' => '10% Happier',
				'author' => 'Dan Harris',
				'description' => 'The Book in Three Sentences: Practicing meditation and mindfulness will make you at least 10 percent happier. Being mindful doesn’t change the problems in your life, but mindfulness does help you respond to your problems rather than react to them. Mindfulness helps you realize that striving for success is fine as long as you accept that the outcome is outside your control.'
			),
			array(
				'title' => 'The 10X Rule',
				'author' => 'Grant Cardone',
				'description' => 'The Book in Three Sentences: The 10X Rule says that 1) you should set targets for yourself that are 10X greater than what you believe you can achieve and 2) you should take actions that are 10X greater than what you believe are necessary to achieve your goals. The biggest mistake most people make in life is not setting goals high enough. Taking massive action is the only way to fulfill your true potential.'
			),
			array(
				'title' => 'A Short Guide to a Happy Life',
				'author' => 'Anna Quindlen',
				'description' => 'The Book in Three Sentences: The only thing you have that nobody else has is control of your life. The hardest thing of all is to learn to love the journey, not the destination. Get a real life rather than frantically chasing the next level of success.'
			),
			array(
				'title' => 'A Technique for Producing Ideas',
				'author' => 'James Webb Young ',
				'description' => 'The Book in Three Sentences: An idea occurs when you develop a new combination of old elements. The capacity to bring old elements into new combinations depends largely on your ability to see relationships. All ideas follow a five-step process of 1) gathering material, 2) intensely working over the material in your mind, 3) stepping away from the problem, 4) allowing the idea to come back to you naturally, and 5) testing your idea in the real world and adjusting it based on feedback.'
			),
			array(
				'title' => 'Adapt',
				'author' => 'Tim Harford',
				'description' => 'The Book in Three Sentences: Seek out new ideas and try new things. When trying something new, do it on a scale where failure is survivable. Seek out feedback and learn from your mistakes as you go along.'
			),
			array(
				'title' => 'Anything You Want',
				'author' => 'Derek Sivers',
				'description' => 'The Book in Three Sentences: Too many people spend their life pursuing things that don’t actually make them happy. When you make a business, you get to make a little universe where you create all the laws. Never forget that absolutely everything you do is for your customers.'
			),
			array(
				'title' => 'Are You Fully Charged?',
				'author' => 'Tom Rath',
				'description' => 'The Book in Three Sentences: There are three keys to being fully charged each day: doing work that provides meaning to your life, having positive social interactions with others, and taking care of yourself so you have the energy you need to do the first two things. Trying to maximize your own happiness can actually make you feel self-absorbed and lonely, but giving more can drive meaning and happiness in your life. People who spend money on experiences are happier than those who spend on material things.'
			),
			array(
				'title' => 'The Art of Possibility',
				'author' => 'Rosamund Zander and Benjamin Zander',
				'description' => 'The Book in Three Sentences: Everything in life is an invention. If you choose to look at your life in a new way, then suddenly your problems fade away. One of the best ways to do this is to focus on the possibilities surrounding you in any situation rather than slipping into the default mode of measuring and comparing your life to others.'
			),
			array(
				'title' => 'The Art of War',
				'author' => 'Sun Tzu',
				'description' => 'The Book in Three Sentences: Know when to fight and when not to fight: avoid what is strong and strike at what is weak. Know how to deceive the enemy: appear weak when you are strong, and strong when you are weak. Know your strengths and weaknesses: if you know the enemy and know yourself, you need not fear the result of a hundred battles.'
			),
			array(
				'title' => 'Bird by Bird',
				'author' => 'Anne Lamott',
				'description' => 'The Book in Three Sentences: To become a better writer, you have to write more. Writing reveals the story because you have to write to figure out what you’re writing about. Don’t judge your initial work too harshly because every writer has terrible first drafts.'
			),
		);

		$this->db->insert_batch('book', $data);
	}

	public function down()
	{
		$this->db->truncate('book');
	}
}
