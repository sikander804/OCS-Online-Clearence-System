<?php
function news_list(){
    $news_id = 1;
    $news[$news_id]['news_id'] = $news_id;
    $news[$news_id]['news_title'] = "ADSSSA and Algorythma signed MoU to open Abu Dhabi AI centre of excellence";
    $news[$news_id]['news_date'] = "July 2018";
    $news[$news_id]['news_short_desc'] = "Abu Dhabi's Smart Solutions & Services Authority (ADSSSA) has signed an MoU with technology services company Algorythma, for co-operation on digital and technology transformation initiatives. The partnership will include establishing an AI centre of excellence...";
    $news[$news_id]['news_link'] = "https://www.itp.net/617459-adsssa-and-algorythma-to-open-abu-dhabi-ai-centre";
    
    $news_id = 2;
    $news[$news_id]['news_id'] = $news_id;
    $news[$news_id]['news_title'] = "MoU between DED and Algorythma Aimed at Promoting Cooperation and Implementing Projects";
    $news[$news_id]['news_date'] = "July 2018";
    $news[$news_id]['news_short_desc'] = "The Department of Economic Development — Abu Dhabi and Algorythma, the UAE-based end-to-end technology service company, on Tuesday signed a memorandum of understanding (MoU) with the aim of promoting joint cooperation between the two parties...";
    $news[$news_id]['news_link'] = "https://gulfnews.com/technology/deal-signed-to-boost-blockchain-ai-in-uae-1.2256406";
    
    $news_id = 3;
    $news[$news_id]['news_id'] = $news_id;
    $news[$news_id]['news_title'] = "Algorythma Showcased Its Tech Platforms In Prestigious MIT SciTech Conference 2018 In Boston";
    $news[$news_id]['news_date'] = "April 2018";
    $news[$news_id]['news_short_desc'] = "Algorythma, the UAE based top-notch end-to-end innovation service company, showed its technology platforms at the Yearly MIT SciTech 2018 Meeting, among the world's largest gathering of leading scientists, designers, and entrepreneurs, kept in Boston, Massachusetts, USA...";
    $news[$news_id]['news_link'] = "https://www.dayofdubai.com/news/uae-based-algorythma-showcased-its-tech-platforms-prestigious-mit-scitech-conference-2018";
    
    return $news;
}
function blog_list(){
    $blog = array();
    
    $blog_id = 1;
    $blog[$blog_id]['blog_id'] = $blog_id;
    $blog[$blog_id]['blog_title'] = "How technology can help you up your mental hygiene";
    $blog[$blog_id]['blog_short_desc'] = "When it comes to declining mental health, many may point the finger at technology, as new media urges us to stay constantly updated and on-the-go – through ringing emails, messages and social media notifications. ";
    $blog[$blog_id]['blog_date'] = "19 September 2019";
    $blog[$blog_id]['blog_picture'] = "technology-can-help-you-up-your-mental-hygiene.jpg";
    $blog[$blog_id]['blog_long_desc'] = "
        When it comes to declining mental health, many may point the finger at technology, as new media urges us to stay constantly updated and on-the-go – through ringing emails, messages and social media notifications.  <br />
        The constant need to be updated can be overwhelming. However, this does not need to be the case; we can use technology as a means to practice meditation, mindfulness and better our mental health. 
        ";
    
    $blog[$blog_id]['blog_full_desc'] = "
        <p>
            When it comes to declining mental health, many may point the finger at technology, as new media urges us to stay constantly updated and on-the-go – through ringing emails, messages and social media notifications.         
        </p>
        <p>        
            The constant need to be updated can be overwhelming. However, this does not need to be the case; we can use technology as a means to practice meditation, mindfulness and better our mental health. 
        </p>
        <p>
            <b>Taking a break</b>
        </p>
        <p>
            According to research by scientists at Stanford, rhythmic music may “treat a range of neurological conditions, including attention deficit disorder and depression.” [1] <br />            
        </p>
        <p>
            Patients who deal with anxiety can use phone applications that use sound as an outlet for relaxation. By listening to soothing sounds – of music or the ocean’s waves – patients can feel more relaxed, away from the buzz of the world around them. 
        </p>
        <p>
            Some of these mindful apps zone out its users from everything; they even disable incoming notifications or emails so that there is no distraction while meditating. Often, the app’s meditation session lasts for a couple of minutes and can go up to 20 minutes or more, depending on the user’s preference. 
        </p>
        <p>
            <b>Letting off steam with artificial intelligence</b>
        </p>
        <p>
            Personal assistants on phones have been around for years. Recently, apps powered by artificial intelligence (AI) have been helping people deal with loneliness. 
        </p>
        <p>
            More than 2 million people over 75 years old are living alone in England, while one-third of people over 45 years old in the USA report feelings of loneliness. [2] [3]
        </p>
        <p>
            Alongside physical company, AI-powered apps that respond like humans and hold up conversations help patients deal with loneliness. It also provides them with an outlet to speak to someone if they cannot reach a friend – though a psychologist is always recommended and cannot be replaced by apps. 
        </p>
        <p>
            Other uses for AI in the sphere of mental wellbeing include voice detection, which a tech startup borne out of MIT has leveraged to identify signs of depression through speech; the software is also used in call centers to detect customer satisfaction levels. [4] 
        </p>
        <p>
            <b>Noting down your habits </b>
        </p>
        <p>
            Around for many years, people have been noting down their habits on fitness apps to track their calorie intake and physical health. 
        </p>
        <p>
            Users can also note down their emotions to track their mental health over time. By noting down how they feel throughout the day (from a scale of very happy to very upset) users can identify which activities bring them down, and which activities make them happy. 
        </p>
        <p>
            Accordingly, users can reflect on their habits, which aids them in finding solutions where possible, and practice better habits slowly. In fact, noting down what you did throughout the day also helps with reflection, according to the rehab facility, Newport Academy, which states that writing as a form of journaling helps manage stress and increases awareness on thinking patterns. [5]
        </p>
        <p>
            <b>Practicing reaffirmation with notifications</b>
        </p>
        <p>
            Similar to receiving news, users can download apps that remind them to follow good habits such as remaining hydrated. Also, some apps provide positive reaffirmations that appear in the form of simple notifications on their phone, such as “have a great day” or “you can do this”.
        </p>
        <p>
            Cities in the 21st century encourage hustle and productivity, which can distract us from caring for our mental hygiene. By dedicating some time every day to caring for our mental health, we can practice mindfulness with the help of these simple and encouraging apps. 
        </p>
        <p>
            <b>Sources:</b>
        </p>
        <p>
            [1] Stanford, Symposium looks at therapeutic benefits of musical rhythm, 2006 <br />
            [2] NHS, Loneliness in older people, 2018  <br />
            [3] AARP, Loneliness and Social Connections: A National Survey of Adults 45 and Older, 2018  <br />
            [4] Business Insider, A new company just launched that can detect depression based on the sound of your voice — here's how it works, 2018  <br />
            [5] Newport Academy, The Power of Writing and Journaling for Mental Health, 2017  <br />
        </p>
        ";
    
    $blog_id = 2;
    $blog[$blog_id]['blog_id'] = $blog_id;
    $blog[$blog_id]['blog_title'] = "How Social Media Is Changing the Traditional Business Model";
    $blog[$blog_id]['blog_short_desc'] = "In 2015, Emilie Wapnick conducted a TED Talk on a rather radical idea and labeled herself a “multipotentialite”. She defines this term as “someone with many interests and creative pursuits,”";
    $blog[$blog_id]['blog_date'] = "19 September 2019";
    $blog[$blog_id]['blog_picture'] = "social-media-is-changing-the-traditional-business-model.jpg";
    $blog[$blog_id]['blog_long_desc'] = "In 2015, Emilie Wapnick conducted a TED Talk on a rather radical idea and labeled herself a “multipotentialite”. She defines this term as “someone with many interests and creative pursuits,” and coined it after she realized that every time she gets passionate about one thing, she excels in it and moves on to the next thing. A multipotentialite, then, is someone who is both a scientist and a surfer, or a painter who decided to take on videography for a year and then became a reporter the following year.";    
    $blog[$blog_id]['blog_full_desc'] = "
        <p>
            In 2015, Emilie Wapnick conducted a TED Talk on a rather radical idea and labeled herself a “multipotentialite”. She defines this term as “someone with many interests and creative pursuits,” and coined it after she realized that every time she gets passionate about one thing, she excels in it and moves on to the next thing. A multipotentialite, then, is someone who is both a scientist and a surfer, or a painter who decided to take on videography for a year and then became a reporter the following year. 
        </p>
        <p>        
            Some would go as far as to say that most people are multipotentialites. In the Middle East, the idea is not very new, as most scientists during the Abbasid era (from the 8th century to the 14th century) were also artists. Al-Khawarizmi, known as the father of Algebra, produced works on geography and astronomy alongside his study of mathematics. Another renowned scientist at the time, Jabir ibn Hayyan, a prolific chemist, produced works in cosmology, numerology, astrology, medicine, and philosophy. Therefore, the idea of being an expert at more than one area is not new – quite the opposite, really. Multipotentialites existed hundreds of years ago – and the term is making a comeback.
        </p>
        <p>
            <b>Addiction to constant change</b>
        </p>
        <p>
            Fairly, several ‘new’ waves are making a comeback and companies are noticing it. Gen Z (who will be 32 percent of the global population this year) and millennials (who account for 31.5 percent) are growing less sentimental, as they celebrate ‘Marie Kundo’s ‘Tidying Up’ – a series encouraging people to ‘tidy up’ and remove unnecessary items and clothes from their households. [1]
        </p>
        <p>
            The trend of ‘uncluttering’ stems from minimalism, a movement that calls for having fewer things, which entails; fewer clothes, fewer spoons, and essentially, less clutter. This can pose a problem for production companies, since more consumers are limiting the ‘clutter’ that new purchases add to their life. 
        </p>
        <p>
            Consequently, the young consumer base now prefers buying trips or experiences that they can post on social media websites, placing more value on experiences like a night out, travel or a good meal. 
        </p>
        <p>
            Companies are reacting to this trend through paid advertisements and social media posts that can cost up to $1 million – the cost of one sponsored post on Kylie Jenner’s Instagram profile.
        </p>
        <p>
           According to a survey conducted by Pew Research Centre in 2018, 45 percent of teenagers in America say they are online ‘almost constantly’, with YouTube, Instagram and Snapchat topping the charts for most use, while research by WVEA states that American teenagers spend an average of 9 hours per day on digital media. In 2018 alone, Facebook generated US$55 billion in online advertisements. [2] [3] [4]
        </p>
        <p>
           Algorythma, a technology service company based in the heart of the UAE, recognizes the impact and role that digital media and emerging technologies have on today’s sectors. Therefore, it is building technology solutions across education, artificial intelligence, real estate, finance and new media, in efforts to cater services to the needs of the new generation – as technology has taken a fundamental role in their daily lives.   
        </p>
        <p>
            <b>Say goodbye to one-time purchases</b>
        </p>
        <p>
            Personal assistants on phones have been around for years. Recently, apps powered by artificial intelligence (AI) have been helping people deal with loneliness. 
        </p>
        <p>
            Every day, you may read a newspaper or magazine (online or offline), watch a show on Netflix or Hulu, listen to Anghami or Spotify and use social media through your mobile data. We are all partaking in the subscription economy, which some experts say is the future. The subscription-based model has grown by over 100% a year and has generated $2.6 billion in sales in 2016 compared to $57 million in 2011. [5]
        </p>
        <p>
            Innovative startups saw what was missing in the market: the need for constant newness, for cheaper, in favor of a minimalistic lifestyle.
        </p>
        <p>
            Complementing the subscription economy, a circular economy makes the most out of resources: you rent an item which someone else uses after you, until the item is worn out and recycled. 
        </p>
        <p>
            Joining the circular economy and in its efforts to be more environmentally friendly, IKEA is proposing rental furniture, which it will be testing soon in Switzerland. [6] Soon enough, you may be changing your entire home’s furniture every 6 months – or even less, if you prefer. 
        </p>
        <p>
            Stanford graduate, Tien Tzuo, wrote a book on the importance of the subscription model, and he argues that, “The reality of ownership is dead; now it’s really about access as the new imperative.” [7]
        </p>
        <p>
            For consumers, they can own more things for less, at the cost of not keeping them forever. Instead of making many big purchases, such as purchasing music albums that stack up in cost and space, consumers can listen to entire choreographies for much less of the price – a win-win situation.
        </p>
        <p>
            For businesses, this sheds light on the significance of changing the traditional business model into a subscription-based model; companies that lead the way for a more sustainable future by adding value to the circular economy will also be able to save on costs. 
        </p>
        <p>
            From having many interests to changing up your wardrobe every week, social media is influencing the global economy and the way businesses work; businesses that stay updated with the trends of the market continue to lead the way, while others may not be able to continue. 
        </p>
        <p>
            <b>Sources:</b>
        </p>
        <p>
            [1] Bloomberg, Gen Z Is Set to Outnumber Millennials Within a Year, 2018 <br />
            [2] Pew Research Center, Teens, Social Media & Technology 2018 <br />
            [3] West Virginia Education Association, Teens Spend 'Astounding' Nine Hours a Day in Front of Screens: Researchers <br />
            [4] Statista, Facebook's advertising revenue worldwide from 2009 to 2018 (in million U.S. dollars) <br />
            [5] Stanford Business, Why Every Business Will Soon Be a Subscription Business, 2018 <br />
            [6] Fortune, Data Sheet—Why You May Be Renting Your Next Kitchen Sink From Ikea, 2019 <br />
            [7] Tien Tzuo, Subscribed: Why the Subscription Model Will Be Your Company's Future - and What to Do About It <br />
        </p>
        ";
    
    $blog_id = 3;
    $blog[$blog_id]['blog_id'] = $blog_id;
    $blog[$blog_id]['blog_title'] = "How AI is transforming everyone’s life, including yours";
    $blog[$blog_id]['blog_short_desc'] = "There is an upcoming revolution led by artificial intelligence that is already transforming the way we live and make decisions. Artificial intelligence (AI) is no longer considered a luxury. Rather, countries that are leading the AI revolution";
    $blog[$blog_id]['blog_date'] = "19 September 2019";
    $blog[$blog_id]['blog_picture'] = "ai-is-transforming-everyones-life-including-yours.jpg";
    $blog[$blog_id]['blog_long_desc'] = "There is an upcoming revolution led by artificial intelligence that is already transforming the way we live and make decisions. Artificial intelligence (AI) is no longer considered a luxury. Rather, countries that are leading the AI revolution will be tapping an additional 20 to 25 percent in net economic benefits, while companies that absorb AI over the coming five to seven years could see their cash-flow doubling, according to researchers at McKinsey & Company. ";    
    $blog[$blog_id]['blog_full_desc'] = "
        <p>
            There is an upcoming revolution led by artificial intelligence that is already transforming the way we live and make decisions. 
        </p>
        <p>        
            Artificial intelligence (AI) is no longer considered a luxury. Rather, countries that are leading the AI revolution will be tapping an additional 20 to 25 percent in net economic benefits, while companies that absorb AI over the coming five to seven years could see their cash-flow doubling, according to researchers at McKinsey & Company. [1]
        </p>
        <p>        
            On the personal level, the AI revolution has already knocked its doors on our cars. Vehicle-gathered data will be worth around $450 billion to $750 billion by 2030 [2] while driverless taxis are no longer jaw-dropping, as trials have hit the streets of Singapore years ago, and will soon be a norm for Dubai’s taxi customers. [3]
        </p>
        <p>        
            It’s interesting to note that when the internet was commercialized, productivity increased, more businesses were created, and a true revolution of information-sharing erupted. Now, with AI, the same and more is expected to occur. 
        </p>
        <p>        
            AI is changing our lives and will be necessary for automating administrative tasks, giving us more time to be creative for building new innovative solutions, and ultimately, being more productive and efficient in everything we do.
        </p>        
        <p>
            <b>AI’s role in enhancing healthcare</b>
        </p>
        <p>        
            Because AI can assume what we want, sometimes before entering complete information – such as is the case with predictive text – it has been phrased by some as an ‘alter ego’. This is not very far from the truth, as AI aspires to be our partner in all industries, from banking and healthcare to education. 
        </p>        
        <p>        
            AI has been aiding the healthcare industry in different ways, such as in early detection, wherein AI is streamlined to translate mammograms 30 times faster than manual checks, with 99% accuracy, as per a PwC report. [4]
        </p>
        <p>        
            Additionally, AI aims to decrease the need for care homes which can trigger loneliness for patients, by enabling humanoid robots to talk with patients and have conversations. 
        </p>
        <p>        
            AI applications have also been beneficial in drug testing and are expected to reduce costs and increase efficiency. It usually costs companies $359 million and 12 years for a drug to travel from the development stage to the patient, as per research by PwC. [5]
        </p>
        <p>        
            Regardless of expertise, age and location, everyone benefits from A.I, as it is now more inclusive than ever before, benefitting millions – if not billions – of people across the world.
        </p>
        <p>
            <b>AI is transforming economies</b>
        </p>
        <p>        
            McKinsey & Company researchers predict that around 70 percent of companies by 2030 will adopt no less than one type of AI, while adopting AI technologies has the potential to raise global GDP by around $13 trillion by 2030, which is a yearly growth in GDP of 1.2 percent. 
        </p>
        <p>        
            Consequently, new jobs accelerated by AI investment can increase employment by around 5 percent by the year 2030. This is critical because it implicates that the sooner a company or economy integrates AI into its systems, the more it will benefit, in comparison to the world market.
        </p>
        <p>        
            All in all, innovation is at the core of new technology, and AI carries the potential to transform economies, the business market, and our day-to-day experiences for a higher quality of life. 
        </p>
        <p>
            <b>Sources:</b>
        </p>
        <p>
            [1] McKinsey & Company, Notes from the AI frontier: Modeling the impact of AI on the world economy, September 2018 <br />
            [2] McKinsey & Company, Monetizing car data, September 2016 <br />
            [3] Massachusetts Institute of Technology, Startup bringing driverless taxi service to Singapore <br />
            [4] PwC, No longer science fiction, AI and robotics are transforming healthcare <br />
            [5] PwC, What doctor? Why AI and robotics will define New Health <br />
        </p>
        ";
    
    $blog_id = 4;
    $blog[$blog_id]['blog_id'] = $blog_id;
    $blog[$blog_id]['blog_title'] = "The Global Race for Fresh Ideas: Now and Then";
    $blog[$blog_id]['blog_short_desc'] = "For thousands of years, universities, companies, and nations have been trying to attract the best talents to fuel innovation by providing amenities, financing, and mentorship.";
    $blog[$blog_id]['blog_date'] = "19 September 2019";
    $blog[$blog_id]['blog_picture'] = "the-global-race-for-fresh-ideas-now-and-then.jpg";
    $blog[$blog_id]['blog_long_desc'] = "For thousands of years, universities, companies, and nations have been trying to attract the best talents to fuel innovation by providing amenities, financing, and mentorship. In the 9th century, academics worldwide would travel to the Middle East with aims to thrive in scientific exploration. Baghdad was known as the ‘hub’ for translators, researchers and scientists – rightly so. Translators made heft sums of money and were supported by the caliphate, as they translated works from the Greek and Latin into Syriac and Arabic, facilitating the growth of science within the empire.";    
    $blog[$blog_id]['blog_full_desc'] = "
        <p>
            For thousands of years, universities, companies, and nations have been trying to attract the best talents to fuel innovation by providing amenities, financing, and mentorship.  
        </p>
        <p>        
            In the 9th century, academics worldwide would travel to the Middle East with aims to thrive in scientific exploration. Baghdad was known as the ‘hub’ for translators, researchers and scientists – rightly so. Translators made heft sums of money and were supported by the caliphate, as they translated works from the Greek and Latin into Syriac and Arabic, facilitating the growth of science within the empire. 
        </p>
        <p>        
            On the personal level, the AI revolution has already knocked its doors on our cars. Vehicle-gathered data will be worth around $450 billion to $750 billion by 2030 [2] while driverless taxis are no longer jaw-dropping, as trials have hit the streets of Singapore years ago, and will soon be a norm for Dubai’s taxi customers. [3]
        </p>
        <p>        
            By providing the ideal environment, from financing to providing optimal resources, Baghdad was able to make a name for itself as the innovator’s city: the place everyone wanted to visit to succeed as a scientist, an academic, and a translator. The establishment of the House of Wisdom – the place where philosophers met to work, research, read, write and translate – attracted innovators from around the world, when travel was not as feasible. This helped economic growth, since philosophers also worked on the side as engineers, architects, and held other significant roles in society.
        </p>
        <p>        
            Essentially, the House of Wisdom was a hub for thinkers and gave rise to several groundbreaking findings – from algebra to revolutionary feats in alchemy and astronomy. In fact, the empire continued to rise economically as investments and contributions were made towards the hub. 
        </p>
        <p>        
            In modern times, emerging and international companies have followed suit. Companies began decorating their offices to inspire employees – whether they are creatives, engineers or accountants – to work in a more friendly environment. Some companies began adding a meditation room to provide employees with space to zone out, rest and reflect. Some even added portable beds, pool tables, video game consoles, and more amenities that can entertain employees, and help them interact with each other away from the formalities of a traditional office.
        </p>
        <p>        
            According to research published by the International Journal of Research in Business Studies and Management, the culture of a company is “critical” to its success and productivity – indicating that motivation is core to productivity. For economies, the same can be said. [1] The more motivated the workforce, the more likely they are to be engaged with the product they are working on, resulting in higher levels of productivity and creativity. 
        </p>
        <p>
            <b>Why hubs are crucial to the global economy</b>
        </p>
        <p>        
            Countries across the world are betting on creative and inventive youth to support their economic growth. Recognizing the importance of exporting ideas from within, the race for attracting young entrepreneurs is on.
        </p>        
        <p>        
            The private and public sectors are creating entrepreneurial hubs in efforts to support and encourage entrepreneurs to build practical solutions. These innovations have been thriving in the tech industry, as more applications across the world are facilitating better living. Carpooling apps, online shopping, meeting up with like-minded individuals, watching shows on demand, and many more services have been powered by technology. Some of the largest tech-giants have been developed from a college dorm or a garage – and now, they prefer hiring new employees based on skill, rather than academic achievement. 
        </p>
        <p>        
            Entrepreneurial hubs provide the optimal surroundings for such ideas to thrive. Providing a space that joins entrepreneurs together – regardless of their industry – reminds individuals that they are working towards a common goal: building a successful startup.
        </p>
        <p>        
            Similar to an innovative company that provides amenities for its employees, or the House of Wisdom, startup hubs gather together inventive individuals and teams who have shared ideals and provides the necessary elements that keep them inspired every day.
        </p>
        <p>
            <b>Support that startups need</b>
        </p>
        <p>        
            Though providing a creative and inspiring space for entrepreneurs is essential to harboring new ideas, there remains a need for mentorship and financing. 
        </p>
        <p>        
            Startups need mentorship from industry experts and connections to investors, which are facilities provided by entrepreneurial hubs. Key2Enable, a startup founded in Brazil, received US$150,000 in funding and access to an incubator program after it won a competition by the Abu Dhabi-based innovation hub, Krypto Labs. Such incentives, connections to international investors and mentorship programs provided by these hubs allow startups to grow and advance quickly.
        </p>
        <p>        
            For these reasons, governments are encouraging startup hubs and tech hubs to thrive. The hunger for harboring new ideas and inventions has been a long race for thousands of years; more and more entrepreneurial hubs are being created around the world, all aiming to attract the best talents to cater to consumer-based economies that enjoy change, new ideas, and inventive products.
        </p>
        <p>        
            Recognizing the factors that can improve productivity, it is essential for a startup to harbor a culture for innovation should it aim for success – and startup hubs are an ideal bet for most.
        </p>
        <p>
            <b>Sources:</b>
        </p>
        <p>
            [1] Kelepile, Kabelo. “Impact of Organizational Culture on Productivity and Quality Management: a Case Study in Diamond Operations Unit, DTC Botswana.” International Journal of Research in Business Studies and Management, vol. 2, no. 9, Sept. 1015, pp. 35–45., http://www.ijrbsm.org/pdf/v2-i9/4.pdf.            
        </p>
        ";
    
    return $blog;
}


function Instagramfeed()
{
    $instaResult = file_get_contents('https://www.instagram.com/algorythma_ae/?__a=1');
    $insta = json_decode($instaResult);
    $instamedia = $insta->graphql->user->edge_owner_to_timeline_media->edges; 
    $results = array();
    $i=0;
    foreach($instamedia as $insmedia){
        $results[$i]['image_url'] = $insmedia->node->display_url;
        $results[$i]['post_link'] = $insmedia->node->shortcode;
        $i++;
    }
    
    return $results;
}