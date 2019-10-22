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
			array(
				'title' => 'Born Standing Up',
				'author' => 'Steve Martin',
				'description' => 'The Book in Three Sentences: Steve Martin was one of the most successful comedians of his generation. In his words, his career involved “10 years spent learning, 4 years spent refining, and 4 years spent in wild success.” This fantastic book provided beautiful insights not only into the details of his comedy act, but also into his early life and career development.'
			),
			array(
				'title' => 'The Compound Effect',
				'author' => 'Darren Hardy',
				'description' => 'The Book in Three Sentences: The compound effect is the strategy of reaping huge rewards from small, seemingly insignificant actions. You cannot improve something until you measure it. Always take 100 percent responsibility for everything that happens to you.'
			),
			array(
				'title' => 'Confessions of an Economic Hitman',
				'author' => 'John Perkins',
				'description' => 'The Book in Three Sentences: The United States is engaging in a modern form of slavery by using the World Bank and other international organizations to offer huge loans to developing nations for construction projects and oil production. On the surface this appears to be generous, but the money is only awarded to a country if it agrees to hire US construction firms, which ensures a select few people get rich. Furthermore, the loans are intentionally too big for any developing nation to repay and this debt burden virtually guarantees the developing nation will support the political interests of the United States.'
			),
			array(
				'title' => 'Confessions of the Pricing Man',
				'author' => 'Hermann Simon',
				'description' => 'The Book in Three Sentences: Ultimately, profit is the only valid metric for guiding a company, and there are only three ways to influence profit: price, volume, and cost. Of these three factors, prices get the least attention, but have the greatest impact. The price a customer is willing to pay, and therefore the price a company can achieve, is always a reflection of the perceived value of the product or service in the customer’s eyes.'
			),
			array(
				'title' => 'Fooled by Randomness',
				'author' => 'Nassim Nicholas Taleb',
				'description' => 'The Book in Three Sentences: Randomness, chance, and luck influence our lives and our work more than we realize. Because of hindsight bias and survivorship bias, in particular, we tend to forget the many who fail, remember the few who succeed, and then create reasons and patterns for their success even though it was largely random. Mild success can be explainable by skills and hard work, but wild success is usually attributable to variance and luck.'
			),
			array(
				'title' => 'Free Will',
				'author' => 'Sam Harris',
				'description' => 'The Book in Three Sentences: We do not have the freedom and free will that we think we do. Yes, you can make conscious choices, but everything that makes up those conscious choices (your thoughts, your wants, your desires) is determined by prior causes outside your control. Just because you can do what you want does not mean you have free will because you are not choosing what you want in the first place.'
			),
			array(
				'title' => 'The Goal',
				'author' => 'Eliyahu Goldratt',
				'description' => 'The Book in Three Sentences: Doing work and making money are not the same thing. Simplify your problem to the point where you understand the true goal of your organization. With your goal in mind, identify the constraints within your system (i.e. bottlenecks) and focus on improving the output of that constraint without worrying about the productivity of all related processes.'
			),
			array(
				'title' => 'Guns, Germs, and Steel',
				'author' => 'Jared Diamond',
				'description' => 'The Book in Three Sentences: Some environments provide more starting materials and more favorable conditions for utilizing inventions and building societies than other environments. This is particularly notable in the rise of European peoples, which occurred because of environmental differences and not because of biological differences in the people themselves. There are four primary reasons Europeans rose to power and conquered the natives of North and South America, and not the other way around: 1) the continental differences in the plants and animals available for domestication, which led to more food and larger populations in Europe and Asia, 2) the rate of diffusion of agriculture, technology and innovation due to the geographic orientation of Europe and Asia (east-west) compared to the Americas (north-south), 3) the ease of intercontinental diffusion between Europe, Asia, and Africa, and 4) the differences in continental size, which led to differences in total population size and technology diffusion.'
			),
			array(
				'title' => 'Ignore Everybody',
				'author' => 'Hugh MacLeod',
				'description' => 'The Book in Three Sentences: Nobody knows the best way to deliver your unique idea, no matter how smart they seem. Every artist has to find a way to make a living and share their work, preferably in a way that doesn’t ruin both. Finding your own voice and sharing that voice with the world is the most important thing.'
			),
			array(
				'title' => 'Impro: Improvisation and the Theatre',
				'author' => 'Keith Johnstone',
				'description' => 'The Book in Three Sentences: Many of our behaviors are driven by our desire to achieve a particular level of status relative to those around us. People are continually raising and lowering their status in conversation through body language and words. Say yes to more and stop blocking the opportunities that come your way.'
			),
			array(
				'title' => 'Incognito',
				'author' => 'David Eagleman',
				'description' => 'The Book in Three Sentences: Conscious thought has a surprisingly small impact on your life and most of your behaviors are driven by the unconscious mind. There are competing beliefs within your unconscious mind that are all battling for the single output of your conscious behavior. The complex interactions between your genetics and your environment determine the trajectory of your life.'
			),
			array(
				'title' => 'Intimations of Paradise',
				'author' => 'Christopher Burkett',
				'description' => 'The Book in Three Sentences: A book of 73 photos by master landscape photographer Christopher Burkett.'
			),
			array(
				'title' => 'The Lessons of History',
				'author' => 'Will and Ariel Durant',
				'description' => 'The Book in Three Sentences: Over the course of history, human behavior has changed, but not human nature. No matter who is in power, the rewards gradually accrue to the most clever and talented individuals. Ideas are the strongest things of all in history because they can be passed down and change the behavior of future generations—even a gun was originally an idea.'
			),
			array(
				'title' => 'Love Yourself Like Your Life Depends On It',
				'author' => 'Kamal Ravikant',
				'description' => 'The Book in Three Sentences: Everyone has a truth that they need to live and share. For the author, that truth was committing to the daily practice of repeating the phrase “I love myself.” When you love yourself, life loves you back.'
			),
		);

		$this->db->insert_batch('book', $data);
	}

	public function down()
	{
		$this->db->truncate('book');
	}
}
