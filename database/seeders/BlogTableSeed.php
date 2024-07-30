<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogTableSeed extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('blog')->delete();

        \DB::table('blog')->insert(array (
            0 =>
            array (
                'category' => 'Nurses in the News',
                'content' => '<b>How long have you been on assignment with Access Healthcare?</b> 2 years<br>
<br>
<b>How did you first find out about the company and why did you choose Access Healthcare as your agency?</b> I was working with Danielle and Diego at St. Francis Medical Center in Trenton, NJ when they started the company. They would be talking about it while we were all working together and I watched them grow the company over the years. When I started traveling, Access hadn’t started as a company yet. I was on assignment through another agency and I told Danielle and Diego that I’ll come on board with you. Nurses should be supporting each other.<br>
<br>
<b>What is the best thing about being a nurse?</b> I think it is an honor to be able to take care of someone that is in a vulnerable state. Most of my patients didn’t know that they were going to wind up in the hospital. You are actually helping people change their lives and educate them about what is going on. To have the knowledge and be able to share it with others is amazing. I love what I do. It’s work but it’s something that I come home and tell my kids about my patients all the time. They pray for them. It is an honor for me.<br>
<br>
<b>What are some of the locations that you have traveled to as a nurse? Any favorite cities?</b> I pretty much stay in New Jersey (Jersey City, Newark, Cherry Hill). I really love it at Jersey City Medical Center and stay there on assignments. The management team there is so easy to deal with and I have become really close with the staff. I have children at home and want to stay close by. Once they’re older, then I shall spread my wings and travel further.<br>
<br>
<b>When you have some down time, how do you utilize it?</b> Meditating, interested in science and physics and cleaning the house when the kids are napping. I am very much in the thought of becoming more spiritually, mentally and physically mindful; it is so important to practice mindfulness.',
                'created_at' => '2022-03-22 00:00:00',
                'id' => 1,
                'image' => 'mary-roach.webp',
                'status' => 'active',
                'title' => 'Nurses in the News: Mary Roach, R.N. – ICU, CVICU/CCU',
                'updated_at' => '2022-03-22 00:00:00',
            ),
            1 =>
            array (
                'category' => 'Meet Anthony Amicucci, BSN, RN<br>
<br>

<img src="/storage/blog/unnamed-1.png" class="img-fluid">',
                'content' => 'Diego Davis – CFO ~ Lauren Burnett – Recruiter ~ Kathy Kiser – Credentialing Specialist<br>
<br>
<b>There are now 25 hours in a day! How do you spend your extra hour?</b><br>
<br>
Diego: I would say I would chill out or sleep an extra hour. But knowing me I would go crazy and start to get motivated and do something productive. I would do my daily PMGJ (Pray, Meditate, Gym and Juice).<br>
Lauren: Sleeping.<br>
Kathy: Catching up with friends and family.<br>
<br>
<b>What topic could you give a 20-minute presentation on without any preparation?</b><br>
<br>
Diego: I guess Life Coach type subjects as Motivation and pursuing your dreams by achieving them with consistency and momentum. Giving back, being kind and practicing empathy with all people.<br>
Lauren: How to manipulate your husband into taking you shopping. He might not go with you, but you will get his card lol!<br>
Kathy: Anything having to do with dogs.<br>
<br>
<b>Have you ever completed anything on your “bucket list”?</b><br>
<br>
Diego: I actually have been fortunate to complete a lot on my bucket list. Travelled to a lot of foreign countries and even lived close to London, England a couple of years ago. I lived there for a year. Been to Brazil, Spain, Italy and several other countries. Still want to go to Japan and a couple of other countries. I believe in living life now. I think Buddha said “Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment”.<br>
Lauren: No.<br>
Kathy: I don’t have one.<br>
<br>
<b>Lightning round:</b><br>
<br>
<b>Childhood nickname?</b><br>
<br>
Diego: Nickname is a little different but a lot of Latin families put an “ito” at the end of your name sooooo Diego would become Dieg-ito (pronounced Dee-ya-gee-tow).<br>
Lauren: So my dad’s nickname was Bronko after the football player Bronko Nagurski, so I inherited the nickname Lil Bronko.<br>
Kathy: I didn’t have one.<br>
<br>
<b>Favorite dessert?</b><br>
<br>
Diego: Anything with strawberry in it so strawberry shortcake and ice cream are my go to.<br>
Lauren: I love cake…literally all of it lol! But if I had to pick, cheesecake would be the way to my heart lol!<br>
Kathy: Ice cream/frozen custard.<br>
<br>
<b>Morning person or night owl?</b><br>
<br>
Diego: I am a little bit of a night owl and early bird crashing around 11-11:30 pm and waking up at 6:30-7 am usually. Depends on what I have going on.<br>
Lauren: Night owl…I can function on bare minimum sleep.<br>
Kathy: Morning person for sure.<br>
<br>
<b>An interesting fact about me that my team does not know about is:</b><br>
<br>
Diego: I tried out for a series called “Survivor”. Almost made it, but the producers must have thought that my life had too little drama. So it was a no go!<br>
Lauren: I might have this cute little country accent, but I am originally from Buffalo, NY.<br>
Kathy: I’ve competed in gun competitions and actually won one of them!<br>',
                'created_at' => '2022-04-01 00:00:00',
                'id' => 2,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: April 2022',
                'updated_at' => '2022-04-01 00:00:00',
            ),
            2 =>
            array (
                'category' => 'News',
                'content' => 'On April 2nd, Access Healthcare held its first “family vacation” with staff and nurses at Planet Rose in Atlantic City, New Jersey.<br>
<br>
Theme: Karaoke and a chance to meet in person…many wowed the crowd with their singing styles and a few received trophies for their performances. A great time was had by all and we hope that many more of you will be able to join us for future get togethers!',
                'created_at' => '2022-04-03 00:00:00',
                'id' => 3,
                'image' => 'acity.webp',
                'status' => 'active',
                'title' => 'Access Healthcare’s “Family Vacation” in Atlantic City',
                'updated_at' => '2022-04-03 00:00:00',
            ),
            3 =>
            array (
                'category' => 'In the Spotlight',
            'content' => 'Tricia Foo-Ying &ndash; Chief Accounting Officer ~ Jenina Micah (JM) Cadelina &ndash; Credentialing Specialist ~ Jacob Fields &ndash; Executive Assistant<br>
<br>
<b>What did you want to be when you grew up?</b><br>
<br>
Tricia: Archaeologist or astronomer.<br>
JM: I wanted to be a teacher.<br>
Jake: That is always changing: first a princess, few years later an astronaut. At one point, I had even considered being a nurse.<br>
<br>
<b>What movie can you watch over and over and never get tired of?</b><br>
<br>
Tricia: A Room with a View<br>
JM: John Wick<br>
Jake: Hocus Pocus or White Chicks<br>
<br>
<b>If you could have a superpower, what would it be and why?</b><br>
<br>
Tricia: Invisibility. I think you know why.<br>
JM: Teleportation. It would be easier for me to travel.<br>
Jake: I would read minds. I&rsquo;m so fascinated by what motivates human behavior.<br>
<br>
<b>You have won a lottery of $1 million. What would you do with your winnings?</b><br>
<br>
Tricia: Give away $500K of it, pay off any debt and keep the rest.<br>
JM: Give half to my parents, buy a house and donate to animal shelter.<br>
Jake: I wouldn&rsquo;t tell anyone. I would just stop worrying how much I spend at the grocery store and sushi any time I want!<br>
<br>
<b>Lightning round:</b><br>
<br>
<b>Do you wake up on the first alarm or do you keep hitting the snooze button?</b><br>
<br>
Tricia: I don&rsquo;t use an alarm.<br>
JM: I wake up before the alarm.<br>
Jake: I actually have a changing &lsquo;theme&rsquo; song that I wake up to everyday.<br>
<br>
<b>Favorite food?</b><br>
<br>
Tricia: Tropical fruits<br>
JM: Eggplant lasagna<br>
Jake: Any food, seriously! Don&rsquo;t test me; you&rsquo;ll have to feed me.<br>
<br>
<b>Sunrise or sunset?</b><br>
<br>
Tricia: Sunset<br>
JM: Sunrise<br>
Jake: Sunrise. I&rsquo;m in love with the &ldquo;calm at dawn&rdquo;; it&rsquo;s inspiring.<br>
<br>
<b>What quote inspires you the most and why?</b><br>
<br>
Tricia: &ldquo;You make what seems a simple choice: choose a man or a job or a neighborhood &ndash; and what you have chosen is not a man or a job or a neighborhood, but a life.&rdquo; by Jessamyn West. It shows that whether you&rsquo;re decisive or not, it all leads to a path, so try to choose wisely.<br>
JM: &ldquo;I am a work in progress&rdquo; ~ for me it means that I always have a chance to improve myself and it allows me to be comfortable with making mistakes and at the same time learn from them.<br>
Jake: &ldquo;I know nothing&rdquo; &ndash; Socrates. It&rsquo;s just like the mindset of a scientist; the more I learn, the less I know.',
                'created_at' => '2022-05-03 00:00:00',
                'id' => 4,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: May 2022',
                'updated_at' => '2022-05-03 00:00:00',
            ),
            4 =>
            array (
                'category' => 'Nurses in the News',
                'content' => 'How long have you been on assignment with Access Healthcare?<br>
<br>
I have been with Access for about 3 years now.<br>
<br>
How did you first find out about the company and why did you choose Access Healthcare as your agency?<br>
<br>
I learned about Access through a co-worker and previously worked with Diego at St Francis Hospital.<br>
<br>
Have you always been a travel nurse?<br>
<br>
I became an RN in 2016 and a full-time traveler in 2021. Before being a full-time traveler, I worked two per diem ER positions and traveled weekly. I worked 6 days a week for several years.<br>
<br>
As a former staff nurse, why did you choose to travel?<br>
<br>
I chose to travel for the flexibility and no hospital politics. Since I moved to Italy permanently in 2021, travel nursing is my only option to manage a balanced, healthy lifestyle. Now I only work 6 months out of the year.<br>
<br>
What is the best thing about being a nurse?<br>
<br>
I chose to be a nurse because I like to connect to people and help others.<br>
<br>
What are some of the locations that you have traveled to as a nurse and do you have any favorite cities to work in?<br>
<br>
I traveled mainly in New Jersey and Pennsylvania. Hunterdon Medical Center in Flemington, NJ is a favorite because of the rural area and population.<br>
<br>
When you have some down time, how do you utilize it?<br>
<br>
In my my free time I enjoy time with my family, play Bocce Ball with family in my small village, and in the process of redoing my house in Castropignano.',
                'created_at' => '2022-05-04 00:00:00',
                'id' => 5,
                'image' => 'michael-capps.webp',
                'status' => 'active',
                'title' => 'Nurses in the News: Michael Capps, R.N. – ER',
                'updated_at' => '2022-05-04 00:00:00',
            ),
            5 =>
            array (
                'category' => 'News',
                'content' => 'The concept of moving, in general, may encompass many different feelings and emotions for individuals. Ranging from excitement to anxiety and everything in between, people make the decision for various reasons whether personally or professionally. But what feelings does one have when they move to a different country altogether? That is what I wanted to find out and who better to ask than Princess Capps who moved from the U.S. to Italy…here is what she had to say.<br>
<br>
Where are you originally from? ​ I was born in Philadelphia, PA. My parents are from the Philippines.<br>
<br>
Having lived in the Philadelphia / South Jersey region your whole life, what was it about wanting to move not only out of state but to another country that solidified the decision? We got married in Rome in 2012. That was the first time either of us were in Italy. My husband’s mom’s family moved here in the early 70’s. When we got married in 2012, that was the first time Mike’s mom went back to Italy since she moved to the U.S. We loved Italy so much and after we spent three wonderful weeks here, Mike worked on his dual citizenship paperwork and got it after a few years. We’ve come back here two additional times before we moved here in August 2021. The 2nd time we did the Amalfi Coast area (Ravello, Positano, Ischia, Atrani) and on every trip, we always came to visit his family in the Molise region. The 3rd time we were here, we did the Tuscany area, which included Cinque Terra, Florence, Pisa, San Marino, etc. and again, came to Molise. After this third trip, we realized we would love to retire in Italy one day.<br>
<br>
Then COVID came and we basically were like, “Why wait? Life is short!” So now Mike still works as a travel nurse in the U.S. six months of the year, and I have continued to work remotely for Access.<br>
<br>
Tell us about the town that you currently live in. ​I live in Roccaspromonte, in the Molise region of Italy. It is a small village with less than 100 people. Niko (my son) goes to school in the next town over, Castropignano. There are about 800 people who live in Castropignano. The closest city is Campobasso, the capital of Molise. That’s about 25 minutes away.<br>
<br>
How have you and your family adapted to your new residence? ​I think we have adapted well. It was easier to acclimate since Mike has family here. But everyone has been so welcoming and helpful. With it being such a small village, they welcome newcomers! Niko is 8 and has picked up the language pretty easily. It is a simple, peaceful life. This lifestyle is not for everyone. One has to have patience as the bureaucracy can be frustrating to navigate if you don’t have anyone to help you. Knowing the language is obviously a plus as well.<br>
​​<br>
How has your experience been learning to speak and communicate in Italian? ​ I have had an Italian tutor for a number of years now. However, being here and being immersed in the culture is the best teacher and I feel comfortable communicating in Italian at this point. And when I don’t know what someone said, I ask Niko. LOL<br>
<br>
Anything from back home that you miss? ​A clothes dryer, but I’ve embraced the Italian culture of drying your clothes outside, and the diversity of food that you can get at any time of the day in the US! First thing I eat when I go back will probably be Chipotle! And of course, I miss my family, but our plan is to come back to the US for the summers, when Niko is not in school.<br>
<br>
What would you like to say to the Access team? “Spero di vedere alcuni di voi quest’estate quando torneremo negli Stati Uniti. A presto!” (Translation: “I hope to see some of you this summer when we return to the US. See you soon!”)',
                'created_at' => '2022-05-11 00:00:00',
                'id' => 6,
                'image' => 'unnamed-5.webp',
                'status' => 'active',
                'title' => 'Around the World with Princess Capps',
                'updated_at' => '2022-05-11 00:00:00',
            ),
            6 =>
            array (
                'category' => 'News',
                'content' => 'On May 12th, some of our team members made the trip to Washington, D.C. in support of the National Nurses March. The purpose of the march was to bring awareness and implement changes to issues such as fair realistic wages with no caps, safe staffing patient ratios, no violence against healthcare workers and to change the culture of the biases and discriminations in the nursing profession.<br>
<br>
A rally was held at Audi Field where our team set up camp and met with hundreds of nurses who could potentially become travelers with Access. (Shout out to Mark for an impressive tent display…this is certain to have captured people’s attention.)',
                'created_at' => '2022-05-13 00:00:00',
                'id' => 7,
                'image' => 'unnamed-2.webp',
                'status' => 'active',
                'title' => 'National Nurses March',
                'updated_at' => '2022-05-13 00:00:00',
            ),
            7 =>
            array (
                'category' => 'In the Spotlight',
                'content' => 'Angielene Aco – Contract Specialist ~ Roxanne Ferraro – Corporate Trainer ~ Mark Aquilino – COO<br>
<br>
What are three positive words that people often use to describe you?<br>
<br>
Angie: Funny, sweet and generous.<br>
Roxanne: Funny, helpful, genuine.<br>
Mark: Detailed, well spoken and recently someone referred to me as an A+ guy and that made me feel good!<br>
<br>
It’s your birthday! Which group or singer is playing at your party?<br>
<br>
Angie: Bruno Mars.<br>
Roxanne: I think almost anyone in our company could answer this question on my behalf, lol. It’s Kesha!!!<br>
Mark: Me, obviously…<br>
<br>
Which game show would you most want to be a contestant on?<br>
<br>
Angie: Family Feud.<br>
Roxanne: Supermarket Sweep! I am not sure how well I would do, but I think it would be a lot of fun.<br>
Mark: Family Feud. I come from an Italian family; we feud all the time. I’ve been training for that show my whole life.<br>
<br>
If it were possible to travel back in time and relive one day all over again, which day would you choose and why?<br>
<br>
Angie: That would be the Summer of 2019. That was our first wedding anniversary getaway. We had a lot of fun on an island together with our closest friends with no Wi-Fi and signal. We slept in a tent, did trekking, snorkeling and got drunk ‘til sunset to sunrise. It was a great escape from the busy life in the Metro.<br>
Roxanne: I have been racking my brain to pick one single day for this answer and it is HARD! I’m going to go with my first thought which was my first Kesha concert. I spent the day at an amusement/water park with my brother and his boyfriend, then we went to Kesha in the evening. It was my first time seeing her live and it was the tour of my favorite album of hers. The whole day was perfection.<br>
Mark: The day the Philadelphia Eagles hosted their Super Bowl parade in the city. I’ll never forget the camaraderie and the vibe and mood of the entire city. Since it’s been over two decades since they’ve won one, I wonder if Cowboys fans remember that feeling at all? Go Birds.<br>
<br>
Lightning round:<br>
<br>
French fries or potato chips?<br>
<br>
Angie: French fries.<br>
Roxanne: Ahhh! HOW CAN I CHOOSE?! I pick….chips!<br>
Mark: French fries, extra crispy, with more ketchup on the plate than fries.<br>
<br>
All-time favorite TV show?<br>
<br>
Angie: Game of Thrones and Prison Break.<br>
Roxanne: Steven Universe and Crazy Ex-Girlfriend (they are tied).<br>
Mark: Game of Thrones, but only up to season 7.<br>
<br>
Last word that I had to look up to see what it meant?<br>
<br>
Angie: Myopic (heard that from the series I’m currently watching). It means lacking imagination, foresight or intellectual insight.<br>
Roxanne: It was not in English – Bassa Sababa (Hebrew slang that basically means to stay positive even when bad things happen).<br>
Mark: CV Joint….and no, it’s not what you might think it is! I race dirt bikes and ATV’s and recently the CV joint on my Polaris ATV went bad and I had to find out what CV stood for…Constant-Velocity!<br>
<br>
Given what you know now, what advice would you give to your younger self?<br>
<br>
Angie: I had an awesome childhood and teenage years. So, “Enjoy life to the fullest! You’re doing a great job, Kid!”<br>
Roxanne: “Do not fear rejection. It will hurt more to know you didn’t try at all than to have tried and been rejected. Also – please try to learn to love yourself, or at least see yourself through kinder eyes.”<br>
Mark: “Life will never stop flowing at you like a powerful river, stop expecting it to. Instead, view yourself as a net and only choose to catch the things in life that are worth catching. The rest of it you just have to let float on down the river.”<br>
<br>
',
                'created_at' => '2022-05-25 00:00:00',
                'id' => 8,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: June 2022',
                'updated_at' => '2022-05-25 00:00:00',
            ),
            8 =>
            array (
                'category' => 'News',
            'content' => 'During the weekend of June 10th-11th, some members of Access Healthcare International Office Administrative Services were the guests of honor for the first official Meet and Greet held at Cagraray Island, Albay in the Philippines hosted by Josephine Smith. Upon meeting at the airport in the Bicol region, the team had lunch at the Cagsawa Ruins which included dessert of spicy ice cream (Jessie was brave enough to try the super extremely spicy variety…yikes!). They then boarded a pump boat to the private island for sightseeing, team building fun, games and dancing along with an awards ceremony all with a perfect view of Mt. Mayon which is an active volcano. See what each of them had to say about the experience:<br>
<br>
“Working from a home setup, you don’t know who you work with or who’s with you in the company or in AHIOAS, but since we have this kind of event (team building), you have the chance to know each other or see the faces behind the monitors. It feels so good because there’s no such company that would give you such an event or fun day. Always remember that there is no “I” in Team; you must work together to achieve your goal. Another thing is there is no shortcut to success, we must work hard for it. I also wanted to share something about my experience with Access. I’ve been with Access for almost a year now and I can say that I am working with a great company. I am blessed and forever grateful that I am working here in Access/AHIOAS. I really hope that we keep growing and growing, continue helping others and that we can all meet in person.” ~ Rose<br>
<br>
“I’d just like to share my experience on the team building which was, to me, an amazing opportunity to get to know my colleagues since we’ve all just been working virtually. Although some were, unfortunately, not able to attend, it was still a meaningful event. I believe that it was a great way to strengthen the bond of the team, feel comfortable working with them and know that everyone is willing to lend a hand whenever help is needed. Apart from the scenic views, exquisite foods and homey vibe of our location, Ms. J ensured that we would truly enjoy our stay there with the fun activities they had also organized. We are all appreciative and grateful to Ms. J for all the overall experience and thoughtfulness. Looking forward for the next team building or events and hopefully all of us will be complete.” ~ Lyra<br>
<br>
“Sharing my sentiments on the meet and greet we had. I don’t know where to start, but all I could say is everything was a blast for me. Ms. Josephine was a really good and generous host, and a boss lol. My colleagues are awesome. It felt like we’ve all met each other before and there’s no gap/awkwardness between all of us. We just enjoyed the moment. We played games, won prizes, ate a lot of yummy foods they provided, did karaoke and had drinks. I hoped everyone was there with us too!!!! I almost forgot that I was on team building. It was more like a family on a vacation.” ~ Yhaniee<br>
<br>
“I had really so much fun in our Bicol escapade. It was nice to meet and bond with the AHI team. The first time M, Jessie and I met at the airport, we already clicked, as if we’ve met before in person; there was no awkward moment. Same with Yhaniee, Lyra, Rose and Ms. Josephine. Ms. Josephine was a great host. She and her team were so accommodating and made sure that we were comfortable during our stay. The assigned cabin to me was in front of the beach with a view of the breathtaking majestic Mayon Volcano. The highlight of the event for me was the awarding. We didn’t know that there would be an awarding ceremony. I was out of words and felt happy when Ms. J presented it. I wasn’t expecting that special recognition ‘coz I’m already happy with shoutouts from the team. I also dedicate that special award to my manager, Rachelle Woods. She was my mentor and my inspiration to give my 100% in doing my job. I’d like to thank her for the trust and confidence she has in me. She’s the BEST!!! I’d also like to thank Diego and Danielle for creating AHIOAS and making this event possible. They are the first people who believed in us. That trip made me realize that what we have here in Access Healthcare is different. We’re not just co-workers/colleagues, but we are FAMILY, and we make a great team. This is the best company, and I can’t see myself leaving this organization (not unless they kicked me out LOL).” ~ Angie<br>
<br>
“M, Ange and I (aka the Big 3), it was our first time meeting each other and it was super fun because it felt like we already knew each other for a long time; no awkward moment, just happiness. “Team Mang” is what we called our team when we played the games such as our team chant (which we only had 15 seconds to plan). I learned a lot in this (even though the other team cheated us…our scissors were missing for one of the games only to find out the other team was using it…lol). But like in real life, fighting what life throws at you makes you win and as a group, that’s what we did…we won with 100% team work.” ~ Jessie<br>
<br>
“I had a really good time in Albay, Legaspi. The place was majestic and the food was great. But most of all I was able to finally meet few members of the AHI Family, especially Ms. Josephine. There was no awkwardness in meeting everyone; we instantly clicked, it was like it’s not our first time to be meeting each other. There was no feeling out period or anything; we were like one big family heading to an island where we could spend our weekend. Aside from the gifts and prizes from the games we won, for me, the cherry on top of the event was being recognized. I received the Most Valued Player Award. Gifs on teams are amazing but having something to look at every time I wake up adds up to the drive to do more and work smarter/harder. I would like to take this chance to thank Danielle and Diego for making this happen. To Ms. J, who really took care of us, she really did an amazing job! I am looking forward to the next event if one comes and hopefully everyone can attend.” ~ M',
                'created_at' => '2022-06-11 00:00:00',
                'id' => 9,
                'image' => 'unnamed.webp',
                'status' => 'active',
                'title' => 'AH International Meet & Greet',
                'updated_at' => '2022-06-11 00:00:00',
            ),
            9 =>
            array (
                'category' => 'In the Spotlight',
                'content' => 'Kelly Bowersox – Accounts Receivable ~ Ariel Ashby – Executive Assistant ~ May De Guzman – Credentialing Specialist<br>
<br>
What is an unusual or weird fact that you happen to know?<br>
<br>
Kelly: Female cats can put themselves in and out of heat when they want; they do not need to have a minimum number of days between cycles.<br>
Ariel: Bees can’t fly in the dark! They literally plummet to the ground. Google it.<br>
May: I love chocolate, so I could never forget that white chocolate doesn’t have any cocoa particles (to me it’s like fake chocolate).<br>
<br>
If you could compete in any Olympic sport, which would it be?<br>
<br>
Kelly: Shooting<br>
Ariel: Gymnastics<br>
May: Softball! That’s the only sport I knew…lol<br>
<br>
You are at a make-your-own sundae bar (yay, ice cream!) Which toppings do you choose?<br>
<br>
Kelly: I can never pick just one. Hot fudge/caramel/peanuts all over chocolate ice cream.<br>
Ariel: I’m pretty simple. I want vanilla ice cream with sprinkles.<br>
May: More chocolate syrup.<br>
Hollywood called and they want you to star in a movie with a famous actor/actress. Who would you want to be your costar?<br>
Kelly: Roger Rabbit – it would be fun to be a cartoon!!!<br>
Ariel: Angelina Jolie in an action film!<br>
May: Sandra Bullock!<br>
<br>
Lightning round:<br>
<br>
Crossword or jigsaw puzzles?<br>
<br>
Kelly: Crossword<br>
Ariel: Crossword<br>
May: Jigsaw puzzles<br>
<br>
Favorite song that you can listen to over and over again?<br>
<br>
Kelly: I don’t have just one. I love Bryan Adams – Bare Bones Tour – it is my go-to for road trips. I listen for hours.<br>
Ariel: “How Will I Know” – Whitney Houston<br>
May: “Day One” by Honne<br>
<br>
Category on “Jeopardy” that I would do really well in?<br>
<br>
Kelly: M*A*S*H Episode Antics<br>
Ariel: Harry Potter for 500, please<br>
May: 4-Letter Words<br>
<br>
A genie appears and will grant you one wish of any kind; what do you wish for?<br>
<br>
Kelly: To own our family homestead where my grandfather was born and my dad was raised.<br>
Ariel: 1 billion tax free and legally obtained US dollars<br>
May: Please grant me unlimited wishes…lol',
                'created_at' => '2022-07-01 00:00:00',
                'id' => 10,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: July 2022',
                'updated_at' => '2022-07-01 00:00:00',
            ),
            10 =>
            array (
                'category' => 'In the Spotlight',
                'content' => 'Mary Joyce Jeresano – Human Resources Assistant<br>
Heather Cox – Recruiter<br>
Senen Jessie Salcedo – Administrative Assistant<br>
<br>
What is a quality that people admire most about you?<br>
<br>
Mary Joyce: Punctual, responsible and reliable.<br>
Heather: My husband tells me that it is that I am nice.<br>
Jessie: Kind and helpful.<br>
<br>
Did you ever get away with blaming something on a sibling or friend? If so, what was it?<br>
<br>
Mary Joyce: Growing up in a Filipino household, you learn to be a responsible eldest sister (or brother). Part of it is looking after your younger siblings, be patient with them and most of the time you take the blame for what they did.<br>
Heather: Of course not lol. I am actually having a really hard time trying to figure this one out! I am sure that I blamed something on one of my siblings growing up.<br>
Jessie: No, I always take responsibility for my mistakes.<br>
<br>
You are cooking for guests. What is your signature dish?<br>
<br>
Mary Joyce: Dinuguan with Gata (coconut milk) best paired with Puto (steamed rice cake). Yummy!<br>
Heather: Probably meatball sandwiches with pasta and garlic bread. Or tacos lol depends on the guests!<br>
Jessie: Sinigang. It is a tamarind-based soup that is known for its sour and savory taste. You can make it with either fish, pork belly, spare ribs or corned beef. My favorite is with pork spare ribs, lots of veggies, and a bed of rice.<br>
<br>
If you could be any character from a childhood fairytale, who would you be?<br>
<br>
Mary Joyce: Wendy of Peter Pan.<br>
Heather: Ariel, so I could kiss Eric lol<br>
Jessie: I think I would be Peter Pan. I would love to explore everywhere and meet new friends.<br>
<br>
Lightning round:<br>
<br>
Favorite pizza topping?<br>
<br>
Mary Joyce: Garlic shrimp…yummy!<br>
Heather: Pepperoni<br>
Jessie: Pepperoni and cheese<br>
<br>
Glass half full or glass half empty?<br>
<br>
Mary Joyce: Always glass half full.<br>
Heather: Definitely half full!<br>
Jessie: Glass half full because as a parent you can never be full and always leave time.<br>
<br>
What do you do with your 15 minutes of fame?<br>
<br>
Mary Joyce: I’m going to use it to do goodness, be compassionate and make a difference in people’s lives but not being famous. I want to sponsor a community outreach program, support a children’s charity organization or maybe be part of a wildlife rescue project. If I can do all of these all together, it would be fulfilling for me.<br>
Heather: Hide? I am not interested in any kind of fame lol<br>
Jessie: I would go on live and share awareness about global warming and encourage the wealthy to help the ones with special needs.<br>
<br>
If you were handed a megaphone and could shout one message for a crowd to hear, what would you say?<br>
<br>
Mary Joyce: “I love you 3000!”<br>
Heather: I probably wouldn’t ever shout anything to a crowd, but if I did it would be “Be kind!”<br>
Jessie: “When you have a dream, you’ve got to grab it and never let go.”',
                'created_at' => '2022-08-01 00:00:00',
                'id' => 11,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: August 2022',
                'updated_at' => '2022-08-01 00:00:00',
            ),
            11 =>
            array (
                'category' => 'News',
                'content' => 'In the Philippines, access to the basic medical services remains a challenge especially in rural areas. The COVID-19 pandemic has added a burden to this ongoing struggle creating more limitations for people to avail of simple yet critical health services.<br>
<br>
AHIOAS, being a company that is sensitive to the needs of the community, heeded to the call. On June 23, 2022, the AHIOAS team set up a mini medical mission in San Lorenzo, Tabaco City, Philippines and offered free blood pressure and blood sugar tests to some 50 members of the community. AHIOAS CEO Josephine Smith personally conducted the testing among the beneficiaries.<br>
<br>
As early as 7 o’clock in the morning, people started arriving and the blood pressure and blood sugar tests began. Afterwards they attended a health education session which they were taught prevention and management of diabetes, hypertension and living a healthy lifestyle. Snacks were served right after.<br>
<br>
Those who came had nothing but words of gratitude for this activity. Some of them had their blood pressure and blood sugar tested only when they were admitted to hospitals. The community nurse also thanked AHIOAS for the activity mentioning people are coming to her for such services, but due to lack of resources she cannot provide them.<br>
<br>
AHIOAS recognizes that this small and short activity is just a temporary solution to a much bigger health issue in the Philippines, but it remains hopeful that this is a beginning of a healthful journey of the community.',
                'created_at' => '2022-08-01 00:00:00',
                'id' => 12,
                'image' => 'outreach.webp',
                'status' => 'active',
                'title' => 'AHIOAS provides access to basic health services via its Community Outreach Program',
                'updated_at' => '2022-08-01 00:00:00',
            ),
            12 =>
            array (
                'category' => 'In the Spotlight',
                'content' => '<ul>
<li>Karen Quinones – Compliance Assistant</li>
<li>Rachelle Woods – Recruiting Manager</li>
<li>Jody Palmier – Payroll Manager/Retirement Specialist</li>
</ul>
What is one important skill that you think everyone should have?<br>
Karen: Normalizing kindness.<br>
Rachelle: Patience and I realize you mean skill like perhaps sewing, but I feel strongly that the most important skill to possess is patience!<br>
Jody: Accountability – Do what you say you are going to do and fess up to mistakes because, after all, we are all human.<br>
<br>
You are going to a costume party. Who or what do you dress up as?<br>
Karen: Dinosaur costume.<br>
Rachelle: I am not a dress up for costume party kind of gal but IF I were to do so, I would dress up as Kimmy Schmidt from the TV show Unbreakable Kimmy Schmidt!<br>
Jody: Myself – I can be scary and funny at the same time.<br>
<br>
The strangest or funniest thing that has ever happened during a virtual meeting was _____?<br>
Karen: When my cat suddenly pops up and sits in front of the camera.<br>
Rachelle: Once on a call with Toni Arrigo, my husband yelled from the bathroom near me, “Why do you leave me without TP?! I need to wipe my A**”. Toni and I laughed for quite some time, and she shared her similar stories!<br>
Jody: A co-worker who didn’t realize she had her camera on was not happy with something that management said and started flipping off the camera. Multiple birds were used, and needless to say, she was not employed for much longer after this incident.<br>
<br>
Tomorrow marks the first day of your retirement. What is one thing you are looking forward to doing?<br>
Karen: Ignoring time and travel around the world.<br>
Rachelle: Funny because I just got this question in our Recruiting/Admin Friday fun meeting and I will say it again, first day or any day of retirement, I look forward to moving to Montana and having a farm of dogs, cats, horses, and chickens!<br>
Jody: Not turning on my computer.<br>
<br>
Lightning round:<br>
<br>
It’s breakfast time! Pancakes, waffles or eggs?<br>
Karen: Eggs.<br>
Rachelle: Pancakes, no syrup, just butter.<br>
Jody: Waffles.<br>
<br>
All-time favorite movie?<br>
Karen: Titanic<br>
Rachelle: 10 Things I Hate About You<br>
Jody: Overboard – the original one with Goldie Hawn and Kurt Russell.<br>
<br>
Interesting fact about your hometown?<br>
Karen: Land of known Philippine National Heroes.<br>
Rachelle: There are quite a few I like so I am giving a few! Richmond was the former home of the Starr Piano Company and if you have watched the show 1883, the opening scene is one of these Piano’s from Richmond. It was also the home of the Gennett Record Company that produced historic jazz recordings such as from Louis Armstrong. Both sadly burned down and we now have a “music walk of fame” down to what is left of the buildings and has since been turned into a city event area. Last, the Wright Brothers lived here from 1881-1884 and tried to invent a new chewing gum with tar and sugar while here before becoming what we know them as today, the inventors of the world’s first successful airplane!<br>
Jody: Originally named Manhattan by William Astor in 1874, my hometown was named Astor after William Astor died in 1892. His son, John Jacob Astor inherited the town after his father’s death. John continued to develop and promote the town until his death with the sinking of the RMS Titanic in 1912. The estate passed to John’s son Vincent, who built the Astor Drawbridge in 1926. This drawbridge is one of the last true drawbridges in Florida still in operation today.<br>
<br>
The best example of giving back to a community that I have seen is ____?<br>
Karen: Charity/Donations.<br>
Rachelle: Volunteering for events with underprivileged children or donating to events for underprivileged children.<br>
Jody: Our local VFW post buys and donates all needed medical supplies to our Vets in our little town. Taking care of those who risked their lives and lost limbs for our Freedom is an awesome sight.',
                'created_at' => '2022-09-01 00:00:00',
                'id' => 13,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: September 2022',
                'updated_at' => '2022-09-01 00:00:00',
            ),
            13 =>
            array (
                'category' => 'News',
                'content' => '*story contributed by Marigold Sumaoang<br>
<br>
MERRY CHRISTMAS! TOO SOON? Not when you’re in the Philippines!<br>
<br>
Filipinos takes the phrase “Christmas season” to a different level, the 1st of September marks the start of the Yuletide season or best known as the BER-months (SeptemBER to DecemBER), when decorations are put up and Christmas carols are played in shopping malls, radios and it jingles all the way up until the Feast of the Three Kings in January.<br>
<br>
There’s no textbook explanation for why we celebrate Christmas so early, there are hundreds of theories, but we’ll leave that topic for another time. The long festival days are associated with many unique Filipino traditions, here are some:<br>
Approximately 80% of Filipinos are Catholics, and celebrating Christmas definitely involves religious activities. Influenced by the Spaniards there’s the “Simbang Gabi” (Dawn Mass) or popular by its Spanish name “Misa de Gallo”. It’s a series of nine dawn masses on the days leading up to Christmas. It starts on December 16th until Christmas Eve. As we continue this tradition, many Filipinos credit Simbang Gabi with the belief that when they complete the entire series of nine dawn masses, it is said that their wishes will be granted.<br>
<br>
Most sought-after seasonal Filipino delicacies – Bibingka (Rice Cake) and Puto Bumbong (purple steamed rice cake cooked inside a bamboo tube), often sold outside Churches during the Simbang Gabi.<br>
<br>
Parol or Filipino Christmas Lantern – It is a star-shaped lantern which is the iconic symbol of Christmas in the Philippines. It is typically being hanged outside Filipino houses.<br>
<br>
Most of the children go from house to house singing Christmas carols for the residents. This is known as the “Caroling” as it is known in the US and other countries. BUT- these carolers have homemade instruments made from cola bottle tops or biscuit tins. Speaking of creativity, right?<br>
<br>
Noche Buena- In Spanish-speaking countries as well as the Philippines, Noche Buena refers to Christmas Eve and the feast before Christmas. It’s the highlight of the Christmas celebration, the food prepared and severed are diverse. While holiday meals are ubiquitous, Filipino Noche Buenas are typically shared with family and neighbors.<br>
<br>
Christmas Parties Galore- who says eating stops after Noche Buena? Filipinos love to have a good time with their friends and loved ones, and Christmas is one of the best excuses to throw parties, unli food? drinks? karaoke anyone? Don’t bother with the futile attempt to stick to your diet – it’s not happening, trust me!<br>
<br>
Christmas in the Philippines is all about families. It’s a time for reunions – meeting relatives and friends you may not have seen in a long time. Almost all Filipinos, especially those working or living abroad, return home during Christmas, braving the crowded airports as families and friends gather to celebrate. Filipinos’ strong sense of family and the preservation of bonds make Christmas the perfect time to share love and blessings.<br>
<br>
It’s almost always a Merry Christmas in the Philippines. Circumstances may be challenging at times, families may not always be complete, some may even have to work on Christmas eve, but certainly, Filipinos know how to see the light in Christmas. This is why even Filipinos abroad would agree when I say “Iba talaga ang pasko sa Pinas!” or Christmas is indeed different in the Philippines.<br>
<br>
I guess the next question would be, why do Filipinos start celebrating the Holidays in September? Filipino are very family-oriented, if you end up in the presence of Filipinos for an extended period of time, you can expect the visitor hospitality to turn into genuine familial love, having said that, once an honorary member of a Filipino family, you can also expect to be invited to all of their fun and food filled gatherings. The holiday season’s long celebration boils down to the people’s love of family and friends, love of celebrations and the core Filipino trait of optimism, humor, positivity and “pakikisama” (getting along with each other).',
                'created_at' => '2022-09-01 00:00:00',
                'id' => 14,
                'image' => 'unnamed-9.webp',
                'status' => 'active',
            'title' => 'PASKO SA PINAS! (Christmas in the Philippines)',
                'updated_at' => '2022-09-01 00:00:00',
            ),
            14 =>
            array (
                'category' => 'Nurses in the News',
                'content' => 'by Lindsay Shindel<br>
“One day, I really want to own a racehorse” my now husband said to me when we first met 12 years ago. It was our third date, and I nodded, thinking to myself, that’s great for you! I always thought horses were beautiful animals, from afar. Didn’t give it a second thought.<br>
<br>
Fast forward to June 2014. My husband, Pete, and I had been married for 2 years, and the discussion of owning a racehorse came up…again. Growing up, Pete loved watching the races with his dad, and was fascinated by how the horse racing world worked. I knew nothing about horse racing, so he taught me a few things. He explained that a thoroughbred horse is used for racing. He showed me a condition book, which is a book with a schedule of races. Then he showed me how to use the book to pick and choose which horses would be winners. After learning more about the sport, I said ok, let’s do this!<br>
<br>
Finding a horse wasn’t difficult. Finding a horse that had the makings of a winner, that was the hard part. Pete did a lot of research, and found what he decided was the perfect horse, named Allie, at a farm in Delta, PA. Allie was a beautiful dark bay 2-year-old Filly. She had the biggest eyes, and an even bigger personality. Pete had checked her breeding, and she was exactly what he wanted. As Pete was chatting with the owner of the farm, I ventured around the barn, looking at the other horses. As I was walking, I heard one of the horses throwing a fit in her stall. She was a gorgeous Chestnut Filly named Penny. She was feisty, silly and made me smile. My husband took one look at me with her, and asked “how much for two horses?”<br>
<br>
Since that day, we have grown our little horse racing hobby from 2 horses to 18. We have attended both live and online horse auctions. We went through a few trainers until we found the right one to work with us. Allie (her race name was Rowd E. Allie) ended up being our most successful horse, with a career of 7 first place finishes, 2 second place finishes, and 1 third place finish. Penny only raced a few times but got injured. Both Allie and Penny are now both retired Mares and living their best lives on a farm in Maryland. We try to visit them every other weekend.<br>
<br>
Owning horses isn’t easy, they are extremely fragile animals. Each one of them has their own personality. I often refer to them as humungous dogs. They love to give kisses, play, get scratched, and give hugs. I honestly can’t imagine life without our gentle giants.',
                'created_at' => '2022-09-15 00:00:00',
                'id' => 15,
                'image' => 'unnamed-7.webp',
                'status' => 'active',
                'title' => 'From row homes to country barns: How this city girl came to own racehorses',
                'updated_at' => '2022-09-15 00:00:00',
            ),
            15 =>
            array (
                'category' => 'Nurses in the News',
                'content' => 'How long have you been on assignment with Access Healthcare?<br>
I can proudly say that I’ve been on continuous assignments with Access Healthcare since August 2020!<br>
<br>
How did you first find out about the company and why did you choose Access Healthcare as your agency? Allow me to start with the second question first, Access Healthcare was Divinely chosen for me… my very first Access Healthcare assignment came as a result of integrity, compassion, and conversation mixed with some laughs because when the need for a Surgical Technician became available, Danielle just “happened” to know the manager of the OR and I just “happened” to know the OR director and “somehow” in less than 3 weeks, I was working for Access Healthcare, that’s how Access came into my life and my desire to want to work for such an outstanding healthcare agency. Everything and I do mean everything “fit” perfectly in place for me!<br>
<br>
Have you always been a travel Surgical Technician?<br>
Not always, I’ve had staff positions over the years… however I’ve had the wonderful blessing to safely and successfully accept various travel assignments since 1994. I’ve been fortunate to have “scrubbed” cases that today are a part of evidenced-based landmark research papers, as well as, “scrub” cases that included politicians, celebrities, and athletes that came as a result of being a traveling Surgical Technician. I am esteemed to have that as part of my experience, knowledge, and education… I know that I am far more than “just a tech.”<br>
<br>
As a former staff Surgical Technician, where did you work and why did you choose to travel? I’ve held both staff and travel assignments simultaneously because travel allows for the freedom of scheduling and having a staff position kept me close to my community. For instance, having worked at the VA hospital in Philly taught me to value even greater those that served our country, and then working at Nemours Hospital formally A.I. duPont Hospital for Children taught me that strength and courage come at that youngest age imagined, and to combine these and more in my experience as a traveling Surgical Tech conditioned me to meet any challenge wherever my assignment shall take me learning something everywhere I go.<br>
<br>
What are some of the locations that you have traveled to as a Surgical Technician and do you have any favorite cities to work in? My travel assignments as a Surgical Technician have been in the Tri-State area of NJ, MD, PA, and DE. I do not have any “favorite cities” just great experiences!<br>
<br>
When you have some down time, how do you utilize it? I utilize some of my “down-time” doing various types of grief work as a Chaplain in my community. I also enjoy reading, watching cartoons, listening to music, and long relaxing drives.<br>
<br>
What is the best thing about being a Surgical Technician? For me, the best thing about being a Surgical Technician is knowing that I have a rewarding opportunity to provide exceptional care where dependability, teamwork and a desire to teach the next generation will always be in demand as medical advances in technology and skill require staying up to date in the world of Surgical Technology.<br>
<br>
Thank you for allowing me this opportunity to share why I enjoy what I do as a Traveling Surgical Technician.',
                'created_at' => '2022-09-21 00:00:00',
                'id' => 16,
                'image' => 'carmen.webp',
                'status' => 'active',
                'title' => 'Travelers in the News: Carmen Wilson – Surgical Technician',
                'updated_at' => '2022-09-21 00:00:00',
            ),
            16 =>
            array (
                'category' => 'News',
                'content' => '*as shared by Kori Hahn<br>
<br>
Cpl. Daegan Page was one of the 13 service members killed in action last August at the Kabul airport during the evacuation of Afghanistan. This hit very close to our community in Nebraska. Daegan’s dad (Greg), stepmother (Jenni) and siblings also reside at Beaver Lake. Our community rallied around the family at that time, but we wanted to continue to show our support and live life “The Dae Way”. Our local golf course, Lake Ridge, hosted the 1st Annual Cpl. Daegan Page Memorial Tournament September 18th-19th. The family, along with many Marines that had not seen each other since returning home, were at the event. It was a sight to see.<br>
<br>
Access Healthcare… proud to be a sponsor!',
                'created_at' => '2022-09-21 00:00:00',
                'id' => 17,
                'image' => 'unnamed-8.webp',
                'status' => 'active',
                'title' => '“Fore” a Cause on the Course',
                'updated_at' => '2022-09-21 00:00:00',
            ),
            17 =>
            array (
                'category' => 'In the Spotlight',
                'content' => '<ul>
<li>Christianne (Yhaniee) Cea – Credentialing Specialist</li>
<li>Kori Hahn – Payroll Specialist</li>
<li>Kayla George – Senior Recruiter</li>
</ul>
What is something new or interesting that you learned recently?<br>
Yhaniee: Cockroaches can live for several weeks without its head or even being reborn. That’s why in the Philippines, Filipinos would smash them with their slippers multiple times to make sure they were dead. LOL<br>
Kori: The percentage of rain doesn’t predict the chances of rain. Instead, it means a certain percentage of the forecasted area will see rain—so if you see a 40% chance, it means 40% of the forecasted area will see rainfall.<br>
Kayla: Recently, I have learned new nutrition tips and tricks with my nutrition coach to help me become a more healthier individual.<br>
<br>
You are chosen to redecorate Access Healthcare’s conference room. What color do you paint the walls and what accessories go in the room and on the walls?<br>
Yhaniee: I would paint the walls white or gray with an accent wall of wood design. It would look neat and tidy for a conference room.<br>
Kori: If we are sticking with our colors, I would do white shiplap on the walls, have an accent wall as black (or chalkboard paint) and accessorize with all things yellow.<br>
Kayla: For Access, I would choose pastel colors and neutral/soft accent décor/accessories to create a chill and relaxing vibe!<br>
<br>
Chronologically you are an adult. What is something that makes you feel like a little kid all over again?<br>
Yhaniee: Re-watching Disney movies and cartoons. It kinda feels nostalgic to me.<br>
Kori: Christmas! I love Christmas and spending time with my family. Santa is real!<br>
Kayla: Ice cream and puppies! The joy that overcomes my heart when I see either one makes me question my age.<br>
<br>
We are all at a party and meeting in person for the first time. Tell us about yourself in three sentences or less.<br>
Yhaniee: I’m shy but I’m really talkative nonstop if you get to know me. My life is food. I love to explore places I’ve never been to.<br>
Kori: I am shy until I get to know you. My family and friends mean the world to me, and I love spending as much time with them as I can. I love a challenge and always wanting to learn new things.<br>
Kayla: I live in an area of Indiana where you see more corn than you do people and my best friend is a dog named Tucker (Don’t tell Mindy).<br>
<br>
Lightning round:<br>
<br>
Coffee or tea?<br>
Yhaniee: Coffeeeeeeeeee!<br>
Kori: Depends on the day and time. White Mocha Frap or unsweetened tea<br>
Kayla: I like both! But I’d choose an iced coffee!<br>
<br>
Favorite non-work activity?<br>
Yhaniee: SLEEP!<br>
Kori: Hanging out with friends/family and golfing.<br>
Kayla: Hiking and biking are my go to thanks to my adventurous boyfriend.<br>
<br>
Access Healthcare is hiring celebrities to work in your department. Who do you want to work alongside of you?<br>
Yhaniee: I have too many to mention, but I’m currently watching House of the Dragons, so I would choose Milly Alcock. I’m super into her character on the show LOL<br>
Kori: Never really been one to have favorites, but I think Blake Shelton would be hilarious. Sorry to all the people that would want to be paid.<br>
Kayla: Jennifer Lawrence or Tiffany Haddish for sure – could you imagine how fun work would be?<br>
<br>
What are you grateful for today?<br>
Yhaniee: I’m grateful that I’m alive and breathing, and that my loved ones are safe and well.<br>
Kori: I’m beyond grateful for my family and friends as well as the community I live in. This past weekend was a testimony to that.<br>
Kayla: I am grateful to see another day, take my pup for his morning walk, have a job that pays the bills for the roof over my head, having friends and family I can always count on, and specifically today, coffee.',
                'created_at' => '2022-10-01 00:00:00',
                'id' => 18,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: October 2022',
                'updated_at' => '2022-10-01 00:00:00',
            ),
            18 =>
            array (
                'category' => 'In the Spotlight',
                'content' => '<ul>
<li>Rose Figueroa – Accounting Assistant</li>
<li>Karrie Brown – Administrative Assistant</li>
<li>Mo Feinez – Credentialing Manager</li>
</ul>
What is something on your desk, a nearby wall or out the window that cheers you up during the day?<br>
Rose: Sunrise, my mothers’ plants, my cat, my partner on the line and chocolates!<br>
Karrie: There is a board in the office that says, “do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.”<br>
Mo: The sun. I love seeing the sun shining through my window; it really brightens my day, literally, lol.<br>
<br>
Name a characteristic that you admire in others.<br>
Rose: Honest, Trustworthy, Generous and Respectful.<br>
Karrie: Integrity is a characteristic that I look for and admire in others.<br>
Mo: I admire people who are real, true and honest!<br>
<br>
You just won a trip to anywhere in the world! Where are you going?<br>
Rose: I want to go to Iceland to see the northern lights! It has always been my dream.<br>
Karrie: I would go to Namibia, a country in Southern Africa.<br>
Mo: I’m packing my bags and going to Greece!!<br>
<br>
If you did not have to worry about making a living, what would you most like to do for the rest of your life?<br>
Rose: Travel! I love going to places, making adventures and trying their food!<br>
Karrie: I would travel the world.<br>
Mo: Travel the world and enjoy life!<br>
<br>
Lightning round:<br>
<br>
Favorite line from a poem, song or movie is__________?<br>
Rose: “The only thing standing between you and your goal is the b.s.story you keep telling yourself as to why you can’t achieve it.” – Jordan Belfort<br>
Karrie: “Hey you guys” from the movie Goonies.<br>
Mo: “What doesn’t kill you makes you stronger” One of my favorite lyrics from a Kelly Clarkson song!<br>
<br>
Pie or cake?<br>
Rose: Cake!<br>
Karrie: No pie. I love cake.<br>
Mo: Both!! I have a major sweet tooth so if it’s sweet I want it!<br>
<br>
You are appearing on “Shark Tank” to promote your idea. What is your idea or invention?<br>
Rose: In the Philippines, traffic was one of our problems we are facing. So, my idea was to make a flying vehicle lol in that way we will lessen the cars on the road. I know my idea was silly. I was laughing as I am making this! If not, sky cables will do lol!<br>
Karrie: I don’t know but I hope it would make me a lot of money.<br>
Mo: Gosh, this is a hard one! I would love to invent a machine that can teleport me to anywhere in the world!<br>
<br>
What are your three biggest life goals right now?<br>
Rose: Improved physical health, financial stability, marriage and family harmony.<br>
Karrie: Family first, spiritual growth and good health.<br>
Mo: Eliminate debt, save money, buy a house.',
                'created_at' => '2022-11-01 00:00:00',
                'id' => 19,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: November 2022',
                'updated_at' => '2022-11-01 00:00:00',
            ),
            19 =>
            array (
                'category' => 'In the Spotlight',
                'content' => '<ul>
<li>Marigold (M) Sumaoang – Recruiter</li>
<li>Tamara Lloyd – Accounts Receivable Specialist</li>
<li>Elizabeth (Biz) Moore – Recruiter</li>
</ul>
What is one thing you do to get motivated each day?<br>
M: Given that not everyday is a good day, I try my best to find meaning and enjoy every minute of what I do. It will make challenging tasks a bit lighter.<br>
Tamara: Thankfully I don’t have to “do” anything in particular. I enjoy the challenge accounting brings; it’s like solving a riddle or a puzzle everyday…work is my boardgame.<br>
Biz: I wake up early and go to the gym in the mornings before work. It helps me get active and stay concentrated throughout the day.<br>
<br>
Your friends are visiting from out of town and have asked you to show them around. As their tour guide, where are you taking them and why?<br>
M: For me the best place to visit in Davao is the Island Garden City of Samal. Here they’ll find Davao’s most pristine beaches; these places will give them the relaxation they need while enjoying a great view of the ocean and great food!<br>
Tamara: Depending on time, it’s either Niagara Falls or Alexandria Bay. Niagara Falls because it’s a wonder. If they have a passport I will take them to an amazing restaurant on the Canadian side and come back by the Falls at night with the colored lights. Alexandria Bay because I love the castles. So we take a nice boat cruise and see Boldt Castle and Singer Castle.<br>
Biz: Probably Yorktown, VA or Williamsburg, VA. They are both very historical towns with a lot of things to do and explore.<br>
<br>
My best “when I was your age” story is________.<br>
M: When I was your age, the only way to access the internet was in an Internet Shop (Cyber Café) or by disrupting the telephone calls because we were using a dial-up connection.<br>
Tamara: I live in the world of technology, so generally it’s something to do with having to use dial up internet, actually having to remember phone numbers or the way we had to “google” something was to go to the library and read an encyclopedia.<br>
Biz: When I was your age the only entertainment we had was outside with a water hose.<br>
<br>
What is your favorite part about working from home?<br>
M: I get to be with my family and no longer need to commute!<br>
Tamara: Everything lol, but maybe having my own bathroom or getting that extra half an hour of sleep.<br>
Biz: My favorite part about working from home is how convenient it is. It allows me to spend more time with my husband who is in the military and it allows me to have a stable job every time we move.<br>
<br>
Lightning round:<br>
<br>
If you could be famous for one thing, what would it be?<br>
M: I would strive to be famous for my resilience.<br>
Tamara: Nothing never…OMG the thought of being famous is traumatizing. I am a true introvert. I do not like cameras or being the center of attention.<br>
Biz: Singing.<br>
<br>
Favorite childhood board game?<br>
M: Snake and Ladder<br>
Tamara: Probably chess; I used to play that with my father.<br>
Biz: Trouble or Connect4<br>
<br>
Chocolate or candy?<br>
M: Chocolate — milk chocolate to be precise!<br>
Tamara: Umm, if I HAVE to choose, chocolate, but I prefer both lol.<br>
Biz: Candy.<br>
<br>
What made you smile today?<br>
M: I found my favorite Cinderella movie on Disney+ earlier — EVER AFTER! Something to rewatch over the upcoming weekend.<br>
Tamara: Many things. Some jokes with the coworkers, funny stuff in what I’m listening to while working, the memories brought back by answering these questions. Life in general makes me smile.<br>
Biz: Getting my paycheck.',
                'created_at' => '2022-12-01 00:00:00',
                'id' => 20,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: December 2022',
                'updated_at' => '2022-12-01 00:00:00',
            ),
            20 =>
            array (
                'category' => 'In the Spotlight',
                'content' => '<ul>
<li>Mindy Pierce – Assistant Retention Manager</li>
<li>Lindsay Shindel – Compliance Coordinator</li>
<li>Melissa Byrd – Administrative Manager</li>
<ul>
What small act of kindness were you once shown that you will never forget?<br>
Mindy: I would have to say my previous/first manager when I was still working in banking. The act of kindness was her simply believing in me and my success. I was very shy and timid starting my first role in customer service and her encouragement and belief in my success is what gave me the courage to strive in my role. Not all managers are willing to share their knowledge for the benefit of your growth, so having that one person who was willing to contribute their wealth of knowledge to support my own growth and opportunity is what gave me confidence in myself. This is an example of a true “leader” in my mind. With that I will say, look at me now!<br>
Lindsay: When my dad passed away, people sent food to my parents’ house. So much food! It felt really nice to know so many people cared.<br>
Melissa: My grandmother gave me a car when mine was breaking down.<br>
<br>
If you had a magic button on your desk that could bring you whatever you wanted, what would you summon for?<br>
Mindy: I would say “bring me some ENERGY”!! My button would include some sort of automated energy dispenser, maybe an ongoing supply of caffeine via IV…lol<br>
Lindsay: My dad to come visit from heaven, even if just for a day.<br>
Melissa: Coffee, snacks and a massage.<br>
<br>
You are the understudy for the main character in your favorite movie. The lead actress can’t go on and you will be filling in and going to become the next star. Who are you filling in for and what is the movie?<br>
Mindy: I’m a big fan of horror movies. So, I would have to say The Exorcist. I’d be filling in for Linda Blair, aka Regan. My “hidden talent” is being able to talk/sound like her when she is possessed.<br>
Lindsay: I’m filling in for Kate Winslet, the character is Iris Simpkins, and the movie is called The Holiday. I absolutely adore that character.<br>
Melissa: Kate Hudson – How to Lose a Guy in 10 Days.<br>
<br>
Tell us your favorite knock-knock joke.<br>
Mindy: I’ll bring it back to an OG knock-knock from childhood.<br>
Me: Knock, knock!<br>
You: Who’s there?<br>
Me: Boo!<br>
You: Boo who?<br>
Me: Don’t cry, it’s just a knock-knock joke!<br>
Lindsay: This classic…<br>
Knock, knock. Who’s there?<br>
Banana. Banana who?<br>
Knock, knock. Who’s there?<br>
Banana. Banana who?<br>
Knock, knock. Who’s there?<br>
Orange. Orange who?<br>
Orange you glad I didn’t say “Banana”?<br>
Melissa: Knock, knock. Who’s there?<br>
Leon. Leon who?<br>
Leon me….when you’re not strong.<br>
<br>
Lightning round:<br>
<br>
Favorite music artist?<br>
Mindy: Alanis Morissette or Lady Gaga.<br>
Lindsay: So many! It depends on my mood and what I want to listen to. First ones that came to mind on the spot were Prince and Garth Brooks.<br>
Melissa: I come from a musical family and I love all genres of music and too many to list; I have lots of favorites.<br>
<br>
Reality TV…nay or yay? (If yay, what are you watching?)<br>
Mindy: No thanks! Typically, reality TV is drama filled and that’s just not me!<br>
Lindsay: Yay! Right now I’m watching the newest season of Too Hot To Handle on Netflix, but I can’t wait for the new season of The Circle (also on Netflix).<br>
Melissa: Yay – Homestead Rescue!!<br>
<br>
Biggest pet peeve?<br>
Mindy: Chewing with your mouth open or making an actual “gulp” noise while drinking. Also, loud and repetitive noises, they make me angry!<br>
Lindsay: The sound of someone rubbing their feet on a carpet. That sound for me is equivalent to nails on a chalkboard. Oh, and liars.<br>
Melissa: Someone talking nonstop during a meal or a movie.<br>
<br>
Best slogan that describes you or your values is __________?<br>
Mindy: “Be the change that you wish to see in the world.”~ Mahatma Gandhi<br>
Lindsay: Well, there are three things I always say that don’t necessarily describe me, but I think are good advice (lol)<br>
1. “Wait to worry”.<br>
2. “Not my circus, not my monkeys”.<br>
3. “Tomorrow is a hope, not a promise”.<br>
Melissa: “The true perfection of man lies not in what man has, but in what man is.” ~ Oscar Wilde',
                'created_at' => '2023-01-01 00:00:00',
                'id' => 21,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: January 2023',
                'updated_at' => '2023-01-01 00:00:00',
            ),
            21 =>
            array (
                'category' => 'Tips and Inspiration',
                'content' => 'New Year’s Resolutions are out…. New Year’s Manifestations are in<br>
<br>
“I am going to eat healthier.”<br>
“I am joining a gym.”<br>
“I am going to quit smoking.”<br>
“I am going to take up a new hobby.”<br>
<br>
How many of these resolutions have you heard before or perhaps even said out loud yourself? The notion to improve our lives, set goals and learn from our past mistakes all sounds great when we convince ourselves that this is what we are setting out to do and we mean it this time. Why is it then that oftentimes people abandon their goals shortly after the new year starts? Why do resolutions fail when we start them with good intention? People have their own reasons, excuses or circumstances why their resolutions don’t take flight. One thing that researchers have determined is that the reason why resolutions may not be achieved is due to the unnecessary pressure that an individual may put on themselves. If things do not work out as it was planned, we may beat ourselves up for not being able to achieve the desired outcome; hence, appearing that we failed.<br>
<br>
This year, instead of focusing on pushing yourself to reach that desired New Year’s resolution, manifest it! Get out a piece of paper and write down all of the things you want to happen instead of writing down a list of things that you need to do in order to achieve a certain outcome. Manifestation works off of realistic expectations and positive energy vs. the part where you punish yourself. Every positive step that you take will bring you closer to your own individual goal. Patience is key! Success does not appear overnight; it takes time, hard work, patience, effort and a positive outlook to reap the rewards (just ask Diego and Danielle). Keep in mind that all good things take time and do not be discouraged if a goal or that want takes a little longer than you might have expected it to take. Believe in yourself; focus on the positive; visualize, give it to the universe, stay humble and grateful! As long as you are working toward bringing about positive changes in your life and in your world, you are already succeeding!<br>
<br>
“If you have a positive frame of mind, you can manifest positive things in your life.”<br>
~ Alesha Dixon',
                'created_at' => '2023-01-03 00:00:00',
                'id' => 22,
                'image' => 'new-year-goals.webp',
                'status' => 'active',
                'title' => 'New Year’s Manifestations',
                'updated_at' => '2023-01-03 00:00:00',
            ),
            22 =>
            array (
                'category' => 'In the Spotlight',
                'content' => '<ul>
<li>Princess Capps – Compliance Manager</li>
<li>Dani Pellegrini – Training Specialist</li>
<li>Angelica Salera – Recruiter</li>
</ul>
What is an easy way to do something nice for someone?<br>
Princess: When someone pops up in your mind, text them and let them know you were thinking about them.<br>
Dani: Let someone know how important they are to you and how much you appreciate them.<br>
Angelica: Smile at them. You can never tell on the surface if someone is having a bad day and initiating something as small as a smile, while getting them to smile back, can sometimes make all the difference.<br>
<br>
If your car had personalized vanity plates, what would they say?<br>
Princess: I’ve seen “PRINCESS” as someone’s plates before, but I wouldn’t choose that because I’m not agreeable with the connotation it presents. My maiden name is “Mendoza” and I’ve joked before that I’d have “STILL DOZA” in all CAPPS. Get it?!?!<br>
Dani: YOLO (You Only Live Once)<br>
Angelica: I have had them in the past LOL!! They said “GELBEL”.<br>
<br>
Speaking of cars, the DeLorean from “Back to the Future” is going to transport you to the time period of your choice. Where are you going to and why?<br>
Princess: Summer of 1995, right after I graduated from high school. Very enjoyable, defining time in my life.<br>
Dani: The future but just temporarily. I’m curious to know what the world will be like during 2100-2200 time period.<br>
Angelica: I would love to go back to the 1940’s (post war time LOL, so roughly 1946!) I love that era and their ways of life then definitely intrigue me! I definitely think times were simpler back then!<br>
<br>
The movie that best defined my generation is__________?<br>
Princess: GOONIES<br>
Dani: The Sandlot<br>
Angelica: Toy Story<br>
<br>
Lightning round:<br>
<br>
Favorite childhood bedtime story?<br>
Princess: LOVE YOU FOREVER by Robert Munsch. While I can’t remember being read to as a child, I read this to Niko and it always gets me.<br>
Dani: If You Give a Mouse a Cookie<br>
Angelica: Anything DISNEY!<br>
<br>
Movie, concert or sports event?<br>
Princess: Concerts are always funner and the memories last forever.<br>
Dani: Movieee!<br>
Angelica: Movie (if it’s including dinner!)<br>
<br>
Guacamole or salsa?<br>
Princess: GUAC<br>
Dani: Guacamole<br>
Angelica: GUAC!<br>
<br>
What I value most in a friendship is_________?<br>
Princess: Integrity<br>
Dani: Honesty<br>
Angelica: Trust!',
                'created_at' => '2023-02-01 00:00:00',
                'id' => 23,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: February 2023',
                'updated_at' => '2023-02-01 00:00:00',
            ),
            23 =>
            array (
                'category' => 'Team Member Spotlight',
                'content' => 'Meet Anthony Amicucci, BSN, RN<br>
<br>

<img src=\'/storage/blog/unnamed-1.png\' class=\'img-fluid\'>',
                'created_at' => '2023-02-02 00:00:00',
                'id' => 24,
                'image' => 'spotlight_feb.webp',
                'status' => 'active',
                'title' => 'Team Member Spotlight: Anthony Amicucci, BSN, RN',
                'updated_at' => '2023-02-02 00:00:00',
            ),
            24 =>
            array (
                'category' => 'In the Spotlight',
                'content' => '<ul>
<li>Josephine Smith – CEO – AH International</li>
<li>Gus Astilla – Director of Operations – AH International</li>
<li>Asli Tabaru – Recruiter</li>
</ul>
If you could see yourself through the eyes of somebody else for a moment, which person would that be and why?<br>
Josephine: Honestly I don’t see myself with anybody. I create my own destiny; I am who I am.<br>
Gus: Through the eyes of my dad to know and learn if I turned out better or worse than how I see myself in my own eyes.<br>
Asli: My cats. I think it would be pretty funny to see myself from their perspective. A big dumb cat who feeds and snuggles them. It would be entertaining.<br>
<br>
How do you get motivated for difficult tasks?<br>
Josephine: I always go back to my core “why”, to the reasons why I do these things. Challenging tasks become bearable when you anchor them on your personal motivations.<br>
Gus: My family gets me motivated.<br>
Asli: I remind myself that we are humans living on a floating rock orbiting in the middle of space and things seem less difficult. Then I get ‘er done.<br>
<br>
What would you do if you had a fully paid year-long break from work?<br>
Josephine: I have an 87-year old mother I will be spending quality time with her and continue giving community service.<br>
Gus: Go on a cruise with the family to visit all 7 continents through all 5 oceans.<br>
Asli: I would travel and sleep a lot more! I would love to visit my ancestral country, Turkey, and see family I’ve never met. I want to travel to learn more about different cultures and recipes.<br>
<br>
It is your first day on the job as an evil villain in a new comic book story. What name do you go by and what is the first piece of mischief you commit?<br>
Josephine: I’d be “Jazz Danz” and every single person I’ll be passing by will be dancing and grooving helplessly.<br>
Gus: Nightshade Deamonne and steal the crown jewels.<br>
Asli: My villain name would be Susava. It’s a play on words for “war of water” in Turkish. I’m not sure what my first crime would be, but I would fend off my enemies using water bending abilities and having a sea creature army.<br>
<br>
Lightning round:<br>
<br>
Do you work in total silence or have music on? (If music is on, what are you listening to?)<br>
Josephine: It depends upon my mood; I do both and if my music is on, I love listening to a gentle, relaxing kind of music – makes me more focused and productive.<br>
Gus: Music on! Brand new Heavies.<br>
Asli: Silence. Music is distracting for me – I’ll want to sing and dance!<br>
<br>
Favorite comedian?<br>
Josephine: I can spend an entire time weekend for a Melissa McCarthy movie marathon.<br>
Gus: Rex Navarrete!<br>
Asli: Dave Chappelle. He’s very funny and has wonderful story telling.<br>
<br>
You have been given an opportunity to walk the red carpet at the Oscars in Hollywood. Who is escorting you and what does your outfit look like?<br>
Josephine: Definitely it will be my son Jomar and I will be wearing a Filipiniana, a traditional Filipina costume that symbolizes the pride, strength and the willingness of a Filipina to fight for a freedom and right.<br>
Gus: My wife in a Monique Lhullier gown and me in a Francis Libiran suit.<br>
Asli: I am escorting myself! And my outfit would remind you of sunshine. Not sure how, just gold and glamorous and shiny and bright and awe striking.<br>
<br>
What do you want your legacy to reflect?<br>
Josephine: I don’t know why I get emotional with this question. With my family, I want to be remembered that I did the best that I could. For my friends, loved ones, patients and colleagues: someone that made a difference in their lives for the better, kind and generous, not monetary specifically but for making them feel loved, sharing time, care, and being compassionate from the heart.<br>
Gus: A legacy of trying to help Filipinos to reach their dreams.<br>
Asli: I want to be known for kindness and generosity. Generosity doesn’t have to be monetary. You can be generous with time, empathy, and resources. I want to be remembered for making a positive impact on others.',
                'created_at' => '2023-03-01 00:00:00',
                'id' => 25,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: March 2023',
                'updated_at' => '2023-03-01 00:00:00',
            ),
            25 =>
            array (
                'category' => 'Team Member Spotlight',
                'content' => 'Meet Stephanie Warren, RN, ER<br>
<br>

<img src="/storage/blog/unnamed-10.webp" class="img-fluid">',
                'created_at' => '2023-03-02 00:00:00',
                'id' => 26,
                'image' => 'spotlight_march.webp',
                'status' => 'active',
                'title' => 'Team Member Spotlight: Stephanie Warren, RN, ER',
                'updated_at' => '2023-03-02 00:00:00',
            ),
            26 =>
            array (
                'category' => 'Newsletter',
                'content' => 'Check out our latest Total Access Newsletter:<br>
<br>
<ul>
<li>April 2023</li>
</ul>',
                'created_at' => '2023-04-01 00:00:00',
                'id' => 27,
                'image' => 'newsletter.webp',
                'status' => 'active',
                'title' => 'Total Access Newsletter – April 2023',
                'updated_at' => '2023-04-01 00:00:00',
            ),
            27 =>
            array (
                'category' => 'In the Spotlight',
                'content' => '<img src="/storage/blog/unnamed-16.webp" class="img-fluid"><br>
<br>
<img src="/storage/blog/unnamed-17.webp" class="img-fluid">',
                'created_at' => '2023-05-01 00:00:00',
                'id' => 28,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: May 2023',
                'updated_at' => '2023-05-01 00:00:00',
            ),
            28 =>
            array (
                'category' => 'Team Member Spotlight',
                'content' => '<img src="/storage/blog/unnamed-4.png" class="img-fluid">
',
                'created_at' => '2023-05-05 00:00:00',
                'id' => 29,
                'image' => 'unnamed-15-1.webp',
                'status' => 'active',
                'title' => 'Team Member Spotlight: Slavka Morrison RN/Med Surge',
                'updated_at' => '2023-05-05 00:00:00',
            ),
            29 =>
            array (
                'category' => 'In the Spotlight',
                'content' => '<img src="/storage/blog/unnamed-13.webp" class="img-fluid"><br>
<br>
<img src="/storage/blog/unnamed-14.webp" class="img-fluid">',
                'created_at' => '2023-06-01 00:00:00',
                'id' => 30,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: June 2023',
                'updated_at' => '2023-06-01 00:00:00',
            ),
            30 =>
            array (
                'category' => 'Team Member Spotlight',
                'content' => '<img src="/storage/blog/unnamed-2.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/unnamed-3.png" class="img-fluid">',
                'created_at' => '2023-06-02 00:00:00',
                'id' => 31,
                'image' => 'team.webp',
                'status' => 'active',
                'title' => 'Team Member Spotlight: Matthew Grapstul RN/OR',
                'updated_at' => '2023-06-02 00:00:00',
            ),
            31 =>
            array (
                'category' => 'In the Spotlight',
                'content' => '<img src="/storage/blog/unnamed-11.webp" class="img-fluid"><br>
<br>
<img src="/storage/blog/unnamed-12.webp" class="img-fluid">',
                'created_at' => '2023-07-01 00:00:00',
                'id' => 32,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: July 2023',
                'updated_at' => '2023-07-01 00:00:00',
            ),
            32 =>
            array (
                'category' => 'Team Member Spotlight',
                'content' => '<img src="/storage/blog/unnamed-5.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/unnamed-6.png" class="img-fluid">',
                'created_at' => '2023-07-07 00:00:00',
                'id' => 33,
                'image' => 'unnamed-15-1.webp',
                'status' => 'active',
                'title' => 'Team Member Spotlight: Kendra Zilaitis L&D/RN',
                'updated_at' => '2023-07-07 00:00:00',
            ),
            33 =>
            array (
                'category' => 'News',
                'content' => 'Danielle Doyle<br>
CEO, Access Healthcare LLC | 2023<br>
<br>
Access Healthcare CEO Danielle Doyle didn’t go to nursing school with the idea of starting a company, but her experience as a travel nurse inspired her to start a firm that emphasizes equal treatment and fair compensation for nurses who travel.<br>
<br>
In 2015, she and Diego Davis, another former travel nurse and now the CFO of Access, had the idea to launch a firm that nurses would want to work with, not for. Doyle drew on her own past experiences to shape the company’s mission and set Access up for success. “I was able to start an agency where everyone is treated equally,” she says. “Access Healthcare believes all healthcare travelers should be compensated equally, independent of years of experience, specialty or recruiter.”<br>
<br>
The desire to champion others has driven Doyle more than money, and she believes many agencies put their own success ahead of advocating for their clients. “What I’m concerned about is quality of life and advocating for [traveling nurses] and helping them understand how the business works and how they’re worth more than people are telling them.”<br>
<br>
This focus on an individual’s well-being and equal treatment is the foundation of her business practices. Doyle describes the Access office culture as “rooted in respect for the individual, an incredibly hard work ethic, spiritual consciousness and an understanding that self-care and mental health are paramount, especially in today’s world.”<br>
<br>
Doyle foresees a bright future for Access Healthcare. The team is working hard to hit their goal of $100 million in revenue this year, having reached $78 million in 2022. The team is also developing new lines of business in permanent placement and locum tenens and is even working on sponsoring international travelers.',
                'created_at' => '2023-07-20 00:00:00',
                'id' => 34,
                'image' => 'Doyle-Danielle_headshot.webp',
                'status' => 'active',
            'title' => 'The Ones to Watch 2023: Danielle Doyle – 40 Under 40 (staffingindustry.com)',
                'updated_at' => '2023-07-20 00:00:00',
            ),
            34 =>
            array (
                'category' => 'In the Spotlight',
                'content' => '<img src="/storage/blog/unnamed-18.webp" class="img-fluid"><br>
<br>
<img src="/storage/blog/unnamed-21.webp" class="img-fluid">',
                'created_at' => '2023-08-01 00:00:00',
                'id' => 35,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: August 2023',
                'updated_at' => '2023-08-01 00:00:00',
            ),
            35 =>
            array (
                'category' => 'Team Member Spotlight',
                'content' => '<img src="/storage/blog/team1.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/team2.png" class="img-fluid">',
                'created_at' => '2023-08-04 00:00:00',
                'id' => 36,
                'image' => 'unnamed-15-1.webp',
                'status' => 'active',
                'title' => 'Team Member Spotlight: Elizabeth Kramer, Med Surg Tele',
                'updated_at' => '2023-08-04 00:00:00',
            ),
            36 =>
            array (
                'category' => 'In the Spotlight',
                'content' => '<img src="/storage/blog/unnamed-19.webp" class="img-fluid"><br>
<br>
<img src="/storage/blog/unnamed-20.webp" class="img-fluid">',
                'created_at' => '2023-09-01 00:00:00',
                'id' => 37,
                'image' => 'ahs_spotlight.webp',
                'status' => 'inactive',
                'title' => 'In the Spotlight: September 2023',
                'updated_at' => '2023-09-01 00:00:00',
            ),
            37 =>
            array (
                'category' => 'Team Member Spotlight',
                'content' => '<img src="/storage/blog/unnamed-8.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/unnamed-7.png" class="img-fluid">',
                'created_at' => '2023-09-02 00:00:00',
                'id' => 38,
                'image' => 'unnamed-15-1.webp',
                'status' => 'active',
                'title' => 'Team Member Spotlight: Bryan Rowell ER RN',
                'updated_at' => '2023-09-02 00:00:00',
            ),
            38 =>
            array (
                'category' => 'Team Member Spotlight',
                'content' => '<img src="/storage/blog/unnamed-10.png" class="img-fluid"><br>',
                'created_at' => '2023-10-06 00:00:00',
                'id' => 39,
                'image' => 'unnamed-15-1.webp',
                'status' => 'active',
                'title' => 'Team Member Spotlight: Justin Antes ICU RN',
                'updated_at' => '2023-10-06 00:00:00',
            ),
            39 =>
            array (
                'category' => 'Team Member Spotlight',
                'content' => '<img src="/storage/blog/team-nov1.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/team-nov2.png" class="img-fluid">',
                'created_at' => '2023-11-03 00:00:00',
                'id' => 40,
                'image' => 'unnamed-15-1.webp',
                'status' => 'active',
                'title' => 'Team Member Spotlight: Shirley Fertig Med Surge RN',
                'updated_at' => '2023-11-03 00:00:00',
            ),
            40 =>
            array (
                'category' => 'Team Member Spotlight',
                'content' => '<img src="/storage/blog/decteam1.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/decteam2.png" class="img-fluid">',
                'created_at' => '2023-12-01 00:00:00',
                'id' => 41,
                'image' => 'unnamed-15-1.webp',
                'status' => 'active',
                'title' => 'Team Member Spotlight: Danielle Erickson ER RN',
                'updated_at' => '2023-12-01 00:00:00',
            ),
            41 =>
            array (
                'category' => 'Newsletter',
                'content' => '<img src="/storage/blog/Total Access newsletter - February 2024-1.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/Total Access newsletter - February 2024-2.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/Total Access newsletter - February 2024-3.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/Total Access newsletter - February 2024-4.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/Total Access newsletter - February 2024-5.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/Total Access newsletter - February 2024-6.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/Total Access newsletter - February 2024-7.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/Total Access newsletter - February 2024-8.png" class="img-fluid"><br>
<br>
<img src="/storage/blog/Total Access newsletter - February 2024-9.png" class="img-fluid"><br>
<br>',
                'created_at' => '2024-02-07 00:00:00',
                'id' => 42,
                'image' => 'newsletter.webp',
                'status' => 'active',
                'title' => 'Total Access Newsletter - February 2024',
                'updated_at' => '2024-02-07 00:00:00',
            ),
        ));


    }
}
