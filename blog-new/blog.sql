-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 05:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` int(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(5, 11, 9, 'Developing AI Web Applications in Python', '1647780077_ai-post.webp', '&lt;h2&gt;&lt;strong&gt;Did you know!&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;The global AI market is going to reach $190.61 billion by 2025.&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Artificial Intelligence holds a compound annual growth rate of 40.2% from 2021 to 2028.&lt;/li&gt;&lt;li&gt;The revenue forecast of AI in 2028 stands at a whopping $997.7 billion.&lt;/li&gt;&lt;li&gt;Business leaders firmly believe that AI will become fundamental, and 94% consider it will create multiple innovative opportunities.&lt;br&gt;&amp;nbsp;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Artificial Intelligence (&lt;strong&gt;AI&lt;/strong&gt;) has long been an essential part of any business that relies on data, analytics, and automation to run its business processes and operations.&amp;nbsp;&lt;/p&gt;&lt;p&gt;AI provides automated decision-making based on the evaluation of big data. However, when looking for AI development, a significant aspect is choosing the right programming language besides the right team.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Python in Artificial Intelligence is a renowned option for software development projects. Notably, Python has emerged as one of the most popular programming languages for AI-related applications today.&lt;/p&gt;&lt;p&gt;In fact, Statista lists Python among the top programming languages for web development with a popularity of 48.24%. The infographic below offers insights into the chief languages preferred worldwide for web development.&lt;/p&gt;', 1, '2022-03-20 18:41:17'),
(6, 11, 8, '\'Open Banking\' for Noobs: A Primer', '1647780402_finance-post.webp', '&lt;p&gt;My intention with this primer is to give you just enough information to inspire appreciation for Open Banking is an initiative that is changing our financial landscape.&lt;/p&gt;&lt;p&gt;This primer will show you the immediate application of Open Banking in your everyday life, and also encourage you to think of other use cases for it.&lt;/p&gt;&lt;h2&gt;Key Terms&lt;/h2&gt;&lt;p&gt;Here are some key terms you&rsquo;ll need to understand Open Banking:&lt;/p&gt;&lt;p&gt;Core Infrastructure: The core systems of a bank which hold information about its customers, e.g. bank balance, personal information, and transaction history. It is this core infrastructure that Third-Party Providers interact with in order to provide open-banking products and services.&lt;/p&gt;&lt;p&gt;Third-Party Provider:&amp;nbsp;Any external party outside the host bank which is accessing the bank&rsquo;s core infrastructure in order to use the information accessed to provide open-banking products and services.&lt;/p&gt;&lt;p&gt;API: Software intermediaries that dictate how two pieces of software can communicate or interact with each other. In Open Banking, the API dictates how the Third-Party Provider&rsquo;s software interacts with the bank&rsquo;s core infrastructure&lt;/p&gt;&lt;h2&gt;What is Open Banking?&lt;/h2&gt;&lt;p&gt;Open Banking is an initiative that has led to the enablement of Third-Party Providers, with the prior consent of the customer/account holder, to interact with the customer&rsquo;s financial information which is being held in the bank&rsquo;s core infrastructure.&lt;/p&gt;&lt;p&gt;These interactions enable the creation of new financial offerings and services, which enhance the financial experience of the account holders. Third-Party Providers are able to access the bank&rsquo;s core infrastructure solely through the use of APIs which helps the banks limit the information these providers have access to.&lt;/p&gt;&lt;p&gt;Up until a few years ago, banks&rsquo; core infrastructure was locked away from external access, so what brought about this shift towards a more collaborative, &ldquo;open&rdquo; system? The intention of Open Banking is to bring about more competition and innovation to the financial services industry, with the ultimate goal of enriching the financial experience of the consumers.&lt;/p&gt;&lt;p&gt;&ldquo;Open Banking was designed to increase innovation and competition in banking and payment services.[&hellip;] It introduced a secure environment that enables customers to consent to third parties accessing their payment account information or making payments on their behalf&rdquo;&lt;/p&gt;&lt;p&gt;Source: The UK Financial Conduct Authority&rsquo;s &ldquo;Open finance - feedback statement&rdquo;&lt;/p&gt;', 1, '2022-03-20 18:46:42'),
(7, 11, 7, 'How to Operate Promotional Robots with Minimal Technical Knowledge', '1647780536_robotic.webp', '&lt;p&gt;A popular notion suggests that a robot is always a complicated technology. Most of the time it is referred to as less &lsquo;familiar&rsquo; forms of robots, however. After all, our technologies, be that a Roomba, a voicemail box, or a smartphone, are robots too and they can be configured and used without any problems.&amp;nbsp;&lt;/p&gt;&lt;p&gt;While we found a way to communicate with our appliances, other types of robots only appear more and more unfriendly. Often it relates to service robots ― ones that have humanoid features, e.g. head, body, arms.&lt;/p&gt;&lt;p&gt;Once a decision is made to purchase such a robot, there is also a sense of uncertainty as far as how to operate it. In reality, even a teenager can handle most services and setup tasks related to it.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;1. Initial setup&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;There are two ways to set up and activate your robot: you can do it yourself or let trained people do it.&lt;/p&gt;&lt;p&gt;A Promobot robot, for example, can be activated and set up from the beginning with the help of Promobot&rsquo;s technical support. Company specialists explain the process step-by-step and can access the robot remotely if that is necessary.&lt;/p&gt;&lt;p&gt;This allows the user to press one button and just follow the instructions. Any experience in communicating with technical support is helpful, even if it comes down to assembling an IKEA cabinet over the phone just once (because who needs instructions, right?).&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;2. Upload info into the robot&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Promotion robots can present different content that has to be uploaded in their memory. That includes promotional phrases, audio, video files, and pictures. Promobot robots can be equipped with dances ― special scripts for movements that can be performed by the robot.&amp;nbsp;&lt;/p&gt;&lt;p&gt;In order to make the info upload process easier, different companies offer their own platforms.&amp;nbsp;&lt;a href=&quot;https://promo-bot.ai/information/upload/?ref=hackernoon.com&quot;&gt;All types of media could be uploaded&lt;/a&gt;&amp;nbsp;as easily as photos on Instagram through them. You can upload a file and it will be presented by the robot in just a few seconds. There are also web services where new moves, dances, and other movement scenarios can be created for robots ― easy as pie.&lt;/p&gt;&lt;p&gt;People can teach robots how to dance without any technical knowledge. The process of uploading dances takes a few minutes ― much less than teaching real people the moves.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;3. Troubleshooting&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Even the most reliable tech can sometimes malfunction. It is important to find the issue and quickly troubleshoot it. Any technical malfunctions in Promobot robots can be fixed remotely by the company&rsquo;s technical specialists ― sometimes robot owners don&rsquo;t even know that their robot was not working correctly and the issue is solved already.&lt;/p&gt;&lt;p&gt;Even if people have to troubleshoot on their own, it is never an impossible task. The world&rsquo;s largest mall in Dubai had&amp;nbsp;&lt;a href=&quot;https://promo-bot.ai/client-stories/how-to-attract-customers-to-your-restaurant-and-away-from-the-competition-promobot-in-dubai-mall/?ref=hackernoon.com&quot;&gt;a situation in their work with the robot&lt;/a&gt;:&lt;/p&gt;&lt;p&gt;&quot;After a while, and it happened long after the Promobot specialists visited us for the initial installation of the robot, we needed to interact with the robot&rsquo;s mechanisms underneath the protective plastic parts. Our manager at that time was not a technical person at all, and she had to work with the technical support, use videos and photos to almost entirely disassemble the robot&rsquo;s hand, find and fix the issue and then reassemble it again. Everything went well, the hand was working again and while it was happening it looked super badass.&quot;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 1, '2022-03-20 18:48:56'),
(8, 11, 6, 'Hiring an Engineer: 7 Different Types of Engineering Interviews', '1647780624_engineer-post.webp', '&lt;p&gt;After conducting hundreds of engineering candidate interviews on behalf of Stripe and&amp;nbsp;LogicLoop - and having interviewed at 30+ tech companies ranging from less than 10 people startups to giants like Facebook, Palantir, and Google - least to say, I&rsquo;ve seen quite the gamut of engineering interviews. If you&rsquo;re an engineering leader thinking about how to design your interview program, or a candidate wondering what types of interviews are out there, let&rsquo;s dive into the most common interview question types and pros and cons of each.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;First, let&rsquo;s get the elephant out of the room. No engineering interview process is perfect and all interviews are at best a narrow snapshot of how well a candidate may do at your company. There are candidates who bomb interviews end up being very strong engineers, but also candidates who do well in interviews but end up struggling on the job. That being said, while imperfect, interviews do give some signals that can be indicative of how well the candidate may fit into your company.&lt;/p&gt;&lt;h2&gt;#1. The take-home coding interview&lt;/h2&gt;&lt;p&gt;The first is the take-home coding interview. Typically this is a longer coding exercise that can take anywhere from a few hours to a day to complete. Since there&rsquo;s less time pressure and candidates are able to use resources available to them on the internet, the take-home interview typically involves completing a small project end-to-end.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;There&rsquo;s less time pressure and candidates get to work in a comfortable environment where they can iterate on their code until it&rsquo;s satisfactory to them.&lt;/p&gt;&lt;p&gt;For longer take-home exercises, some companies even compensate candidates for their time.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;You get less signal on the candidate&rsquo;s thought process and how they interact with others.&lt;/p&gt;&lt;p&gt;It&rsquo;s easier to cheat or directly look up the answer on the internet.&lt;/p&gt;&lt;p&gt;For people will busy lives, take-homes can be time-consuming, especially if the candidate is interviewing at multiple places.&lt;/p&gt;&lt;h2&gt;#2. The algorithms interview&lt;/h2&gt;&lt;p&gt;The algorithms interview is the most classic engineering interview that companies like Google, Facebook, and Palantir like to implement. Typically this will involve concepts like dynamic programming, recursion, sorting, binary trees, etc. Candidates will also need to be familiar with common data structures like arrays, dictionaries, trees, etc.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;These types are interviews are extremely common among large top tech companies and many candidates know how to prepare for them via e.g. leetcode.&lt;/p&gt;&lt;p&gt;Algorithms typically take some amount of rigorous thinking to get right and require you to think through edge cases, so there&rsquo;s some correlation there with general intelligence and the ability to think through complex problems.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Since many of these algorithms are not used on a day-to-day basis in software engineering, many senior candidates may not have these concepts top of mind vs a junior candidate who learned these algorithms recently in their Computer Science course in college.&lt;/p&gt;&lt;p&gt;Non-traditional programs such as programming boot camps don&rsquo;t teach advanced algorithms so you may eliminate folks with non-traditional backgrounds.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;In recent years, there&rsquo;s been more controversy over whether companies should ask algorithms interview or not, given they are not directly related to the day-to-day job.&lt;/p&gt;&lt;h2&gt;#3. The bug squash&lt;/h2&gt;&lt;p&gt;In an effort to mirror more day-to-day working environments, some companies have introduced the bug squash interview. In this interview, a candidate will be given access to some pre-existing codebase with a bug and it&rsquo;s the candidate&rsquo;s job is to find and fix the bug.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;These interviews can give you signal into how the candidate navigates a large, pre-existing codebase, which some of the other types of interviews don&rsquo;t test for since other interview formats typically ask the candidate to write a small program from scratch.&lt;/p&gt;&lt;p&gt;They say it takes a smarter person to debug a piece of code than to write that piece of code, so if a candidate can pull this off, it&rsquo;s a good sign.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Some candidates will go down unfortunate rabbit holes and not be able to find the bug within the allotted interview time slot. Sometimes it just so happens that a candidate misses a section of documentation during the interview that would have clued them into the bug. Due to the limited time constraint, candidates won&rsquo;t have time to comprehensively read through all docs, so some will do a skim, and if that skim results in skipping over the relevant parts, it might just not be their lucky day. This doesn&rsquo;t necessarily mean that they wouldn&rsquo;t do well if given more time.&lt;/p&gt;&lt;p&gt;It&rsquo;s difficult to understand a large codebase within a short amount of time.&lt;/p&gt;&lt;h2&gt;#4. The systems design&lt;/h2&gt;&lt;p&gt;The systems design interview typically asks a candidate to describe how they would set up the infrastructure to support a scalable system. This can be a whiteboarding exercise where the candidate describes the boxes, queues, etc. they would set up to create a scalable system e.g. a webhooks delivery system, a metrics recording system, etc.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;The systems design interview is a great non-coding interview to see if the candidate is able to set up a system and think about scalability, reliability, and operability at the infrastructure level.&lt;/p&gt;&lt;p&gt;Usually, this involves a lot of back and forth conversation with the interviewer and question asking, so you get a sense of how to collaborate with the candidate.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;People who have more experience with infrastructure will tend to do well in these interviews whereas new grads and more junior candidates may simply not have the experience to answer this question well.&lt;/p&gt;&lt;h2&gt;#5. The code review&lt;/h2&gt;&lt;p&gt;While this interview format is uncommon, some companies have started employing the code review interview where the interviewer will either ask the candidate to review a piece of code, or the candidate will submit a piece of code to be reviewed by the interviewer, and incorporate the feedback given.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Since code reviews are a code part of an engineer&rsquo;s job, this provides good insight into how they may actually do a code review on the job.&lt;/p&gt;&lt;p&gt;This exercise can also test for soft skills. Did they take feedback with grace and correct their mistakes? Are they able to give feedback in a constructive manner?&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;It can be difficult to review a piece of code in isolation without more context on the wider codebase.&lt;/p&gt;&lt;h2&gt;#6. The integrations interview&lt;/h2&gt;&lt;p&gt;Another &ldquo;practical&rdquo; code question that has become popular over the years is the integration interview. It&rsquo;s no denying that in the age of APIs, many software engineers have had to integrate some external system as part of their jobs. The integrations interview simply asks the candidate to demonstrate that they can write a program that integrates with some third-party API, such as Stripe or Twilio.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Since integrating APIs and reading documentation are a common part of an engineer&rsquo;s job, this provides good insight into how they may actually hook up an integration on the job.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;For an engineer with a lot of industry experience, this should not be a difficult task to do at all, so arguably this is an &ldquo;easy&rdquo; interview.&lt;/p&gt;&lt;h2&gt;#7. The soft skills/culture fit/manager interview&lt;/h2&gt;&lt;p&gt;Finally, most companies include a soft skills interview, typically with the manager of the team. The interview gives hiring managers the opportunity to ask about projects candidates have worked on in the past as well as their strengths and weaknesses. It also gives candidates the chance to ask questions about the company and team.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Pros&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Soft skills are an important part of an engineer&rsquo;s job and it&rsquo;s important for a hiring manager to meet with the candidate to get a sense of whether they&rsquo;d work well together.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Cons&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;How well a candidate does on this interview can be very subjective.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;If you&rsquo;re a hiring manager, I hope this gives you a few options to brainstorm as you&rsquo;re thinking about setting up your interview program. At&amp;nbsp;LogicLoop, we do a combination of the interview types listed above, although we tend to go lighter on the algorithms questions and instead focus on the practical coding exercises.&lt;/p&gt;', 1, '2022-03-20 18:50:24'),
(9, 11, 5, 'Introducing ApiHome: Home of API Testing', '1647780683_programming-post.webp', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Hello folks! I am excited about introducing ApiHome.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#What is it?&lt;/h2&gt;&lt;p&gt;It&#039;s an OpenAPI based testing tool that runs generated negative test cases&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#Why OpenAPI ?&lt;/h2&gt;&lt;p&gt;The &lt;a href=&quot;https://www.openapis.org/&quot;&gt;OpenAPI specification&lt;/a&gt; was known as Swagger until version 3.0 got released in 2017 and it was renamed to OpenAPI. It&rsquo;s a language-agnostic way to describe a RESTful API that can be used to generate code-stubs and documentation.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#How does it Work?&lt;/h2&gt;&lt;p&gt;Start with the default template or upload an OpenAPI spec or Postman collection&lt;/p&gt;&lt;p&gt;Fix validation errors&lt;/p&gt;&lt;p&gt;Run API Tests&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#Use-cases:&lt;/h2&gt;&lt;p&gt;API Inventory&lt;/p&gt;&lt;p&gt;Business-logic testing(negative test-cases)&lt;/p&gt;&lt;p&gt;Security testing&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#Why ApiHome?&lt;/h2&gt;&lt;p&gt;Easier to navigate UI&lt;/p&gt;&lt;p&gt;To the point Spec validation errors let you get documentation out of the way&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#Upcoming Features:&lt;/h2&gt;&lt;p&gt;Code repository crawler to discover API assets&lt;/p&gt;&lt;p&gt;More fuzzing rules &amp;amp; examples to fix validation errors quickly&lt;/p&gt;&lt;p&gt;CI/CD integration&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;ApiHome is in Beta and is free to use! I would love for you guys to give it a shot and share feedback.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;#Head over to https://apihome.io to get started&lt;/h2&gt;', 1, '2022-03-20 18:51:23'),
(10, 13, 5, 'PHP The Right Way', '1648844519_the-blowup-swDEADSet6Y-unsplash.jpg', '&lt;p&gt;There&rsquo;s a lot of outdated information on the Web that leads new PHP users astray, propagating bad practices and insecure code. PHP: The Right Way is an easy-to-read, quick reference for PHP popular coding standards, links to authoritative tutorials around the Web and what the contributors consider to be best practices at the present time.&lt;/p&gt;&lt;p&gt;There is no canonical way to use PHP. This website aims to introduce new PHP developers to some topics which they may not discover until it is too late, and aims to give seasoned pros some fresh ideas on those topics they&rsquo;ve been doing for years without ever reconsidering. This website will also not tell you which tools to use, but instead offer suggestions for multiple options, when possible explaining the differences in approach and use-case.&lt;/p&gt;&lt;p&gt;This is a living document and will continue to be updated with more helpful information and examples as they become available.&lt;/p&gt;', 1, '2022-04-02 02:21:59'),
(11, 11, 5, 'Home for tech writers and readers', '1649332175_ezgif.com-gif-maker.jpg', '&lt;h2&gt;&lt;strong&gt;Blog on your personal domain&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;Map your custom domain in just seconds. Serve your blog over HTTPS with no extra configuration. Get a high performance, secure, and fully-optimized dev blog that delights your readers.&lt;/p&gt;', 1, '2022-04-07 17:49:35'),
(12, 11, 5, 'Everything you need to start blogging as a developer!', '1649332261_X9ebeNKkc08-00-01-39.png', '&lt;h1&gt;&lt;strong&gt;Join the dev community of over a million active developers.&lt;/strong&gt;&lt;/h1&gt;&lt;p&gt;Over 100,000 tech blogs and growing. Be part of an active community of developers, tech enthusiasts and creators. Blog on a personal domain, share ideas, and connect with the global tech community.&lt;/p&gt;', 1, '2022-04-07 17:51:01'),
(13, 11, 5, 'Introducing Hashnode for Teams', '1649332704_272401354_1303066366862628_8326811913343873477_n.jpg', '&lt;p&gt;Invite your editorial team and let multiple authors publish articles on the same blog.&lt;/p&gt;', 1, '2022-04-07 17:58:24'),
(14, 13, 6, 'There\'s still time to join the Deepgram Hackathon on DEV!', '1649332790_X9ebeNKkc08-00-02-05.png', '&lt;p&gt;The Deepgram x DEV hackathon has amazing prizes for all types of participants &mdash; whether you prefer to build an app, write a post, champion others, or all of the above! 5 Grand Prize winners will receive $1,500 USD and lots more.&lt;/p&gt;', 1, '2022-04-07 17:59:50'),
(16, 11, 5, 'Open Source Node Ecommerce Platform for Remix', '1649589220_i0yi2im7i4ey1zl82uhd.webp', '&lt;h2&gt;&lt;strong&gt;Introduction&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;In this tutorial, you&#039;ll learn how to build a front-end UI for &lt;a href=&quot;https://www.medusajs.com/&quot;&gt;Medusa&lt;/a&gt; using &lt;a href=&quot;https://remix.run/&quot;&gt;Remix&lt;/a&gt;.&lt;/p&gt;&lt;p&gt;Medusa is an open source ecommerce platform in Node.js that provides you with many ecommerce features such as order management, RMA flows, customer management, and more. Medusa also focuses on providing a good developer experience allowing you to get started within minutes and with a strong support community and documentation to back it up.&lt;/p&gt;&lt;p&gt;Remix is a full-stack web framework that allows you to build slick user interfaces with a resilient user experience. It renders pages on the server, unlike most React frameworks.&lt;/p&gt;&lt;p&gt;For this tutorial, we&#039;ll only focus on the basics which include:&lt;/p&gt;', 1, '2022-04-07 18:58:55'),
(19, 11, 5, '10 JavaScript concepts for React beginners', '1649589392_r3pm1jr0ovpbkskclspv.webp', '&lt;p&gt;&lt;strong&gt;React&lt;/strong&gt; is a Javascript frontend library and if you want to get started with React first you have to learn &lt;strong&gt;Javascript&lt;/strong&gt;, the programming language that powers React. Javascript itself is a huge language, and it&rsquo;s not possible for you to learn all of it before learning React. But fear not, this article explains 10 Javascript concepts you must learn before moving on to React.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;Thanks for reading! Topics covered:&lt;/p&gt;&lt;/blockquote&gt;&lt;ul&gt;&lt;li&gt;👉 What is Javascript - Short info&lt;/li&gt;&lt;li&gt;👉 Introduction to React&lt;/li&gt;&lt;li&gt;👉 #1 - Variables&lt;/li&gt;&lt;li&gt;👉 #2 - Functions Definition&lt;/li&gt;&lt;li&gt;👉 #3 - Classes and the Extend keyword&lt;/li&gt;&lt;li&gt;👉 #4 - Async/Await&lt;/li&gt;&lt;li&gt;👉 #5 - Array methods&lt;/li&gt;&lt;li&gt;👉 #6 - Ternary Operator&lt;/li&gt;&lt;li&gt;👉 #7 - Template Literal&lt;/li&gt;&lt;li&gt;👉 #8 - Destructuring&lt;/li&gt;&lt;li&gt;👉 #9 - Spread Operator&lt;/li&gt;&lt;li&gt;👉 #10 - Import and Export&lt;/li&gt;&lt;li&gt;👉 Code a Hello World in &lt;strong&gt;React&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;h2&gt;✨ What is JavaScript&lt;/h2&gt;&lt;p&gt;JavaScript is a high-level scripting language for web pages. It was invented by Brendan Eich in 1995. At first JavaScript&rsquo;s work was to make the web page interactive. but later developers built frameworks, and libraries to make JavaScript available almost on all platforms.&lt;/p&gt;&lt;p&gt;For instance, you can build a mobile app with react native, a desktop app with electron. backend with node.js and frontend with react.js etc.&lt;/p&gt;&lt;p&gt;These are just a few things I mentioned JavaScript is capable of doing. if I say all the things javascript is capable of doing it will be an article itself.&lt;/p&gt;&lt;p&gt;With that said, let&rsquo;s move on and see what React is.&lt;/p&gt;&lt;h2&gt;✨ What is React&lt;/h2&gt;&lt;p&gt;React.js is an open-source JavaScript front-end library created and maintained by Facebook. It&rsquo;s a component-based library, which means React breaks down a bigger application into smaller pieces named components. This approach makes building and managing bigger projects easier.&lt;/p&gt;&lt;p&gt;In case this is your first contact with React, you should note that React is a library, and not a framework like Angular.js, which means it&rsquo;s not a complete solution. When building apps with React you need to use external libraries for things like routing, HTTP requests, and state management.&lt;/p&gt;&lt;p&gt;This is the short intro to react. if you wanna learn more I&rsquo;ll put a few free resources at the end of the article. go check them out.&lt;/p&gt;&lt;p&gt;Enough of the definitions, now, let&rsquo;s get to the JavaScript concepts you need to learn before learning React.&lt;/p&gt;&lt;h2&gt;✨ #1 - Variables&lt;/h2&gt;&lt;p&gt;Before getting started with React, you must how to declare a variable in javascript. You can declare variables in javascript in three ways. using var, let, or const. each of them has pros and cons.&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;var foo = &quot;hello world!&quot;;\r\nlet bar = &quot;Hey, There!&quot;;\r\nconst baz = &quot;What&#039;s up?&quot;;\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;There&rsquo;s a quiet difference between these three. Because the &ldquo;var&rdquo; type will make the variable visible in the global scope, &ldquo;let&rdquo; or &ldquo;const&rdquo; is recommended.&lt;/p&gt;&lt;p&gt;To learn more about each definition feel free to access a full tutorial that covers in deep of the differences:&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;https://www.freecodecamp.org/news/var-let-and-const-whats-the-difference/&quot;&gt;https://www.freecodecamp.org/news/var-let-and-const-whats-the-difference/&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;✨ #2 - Functions Definition&lt;/h2&gt;&lt;p&gt;React&rsquo;s fundamental rule is to break a bigger project into smaller components. And those components are either Functions or Classes.&lt;/p&gt;&lt;p&gt;So, knowing how to declare a function with JavaScript is very important. Also as with the variables, there are more than 2 ways to declare a function. but these 2 are the most important:&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Function declaration&lt;/li&gt;&lt;li&gt;Arrow Function&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Let&#039;s see the examples of each one.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;&lt;strong&gt;Function Declaration&lt;/strong&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;\r\n// function declaration\r\nfunction add(num1, num2) {\r\n &amp;nbsp;return num1 + num2;\r\n}\r\n\r\nadd(2, 2) // 4 \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;This is how you would declare and call a function in plain Javascript.&lt;/p&gt;&lt;p&gt;Now that you know how to declare a simple function with javascript, let&rsquo;s see how it is used in React.js. In React functions are used to create functional components.&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;function App() {\r\n &amp;nbsp;return (\r\n &amp;nbsp; &amp;nbsp;&amp;lt;div className=&#039;App&#039;&amp;gt;\r\n &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;lt;h1&amp;gt;Hello world!&amp;lt;/h1&amp;gt;\r\n &amp;nbsp; &amp;nbsp;&amp;lt;/div&amp;gt;\r\n &amp;nbsp;);\r\n} \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;This is the use of function declaration in React. As you can see a component does not return any value, it returns the HTML which determines how the application will look.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;&lt;strong&gt;Arrow Function&lt;/strong&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;// Arrow function\r\nconst subscract = (num1, num2) =&amp;gt; {\r\n &amp;nbsp;return num1 - num2;\r\n}\r\n\r\nsubscract(5, 2) // 3\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;The arrow function is just a little cleaner than the function declaration. there&rsquo;s not much difference between these two. Example of functional components:&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;const App = () =&amp;gt; {\r\n &amp;nbsp;return (\r\n &amp;nbsp; &amp;nbsp;&amp;lt;div className=&#039;App&#039;&amp;gt;\r\n &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;lt;h1&amp;gt;Hello world!&amp;lt;/h1&amp;gt;\r\n &amp;nbsp; &amp;nbsp;&amp;lt;/div&amp;gt;\r\n &amp;nbsp;);\r\n} \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Just like the arrow function, the arrow function component is a little cleaner than the function declaration. It looks nicer and more intuitive.&lt;/p&gt;&lt;h2&gt;✨ #3 - Classes and the Extend keyword&lt;/h2&gt;&lt;p&gt;As I said before, React has class components and functional components. The functional component is built with functions and the class components are built with classes.&lt;/p&gt;&lt;p&gt;Let&#039;s look at the example of the javascript class then we will look at react class components.&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;// javascript class\r\nlet Rectangle = class {\r\n &amp;nbsp;constructor(height, width) {\r\n &amp;nbsp; &amp;nbsp;this.height = height;\r\n &amp;nbsp; &amp;nbsp;this.width = width;\r\n &amp;nbsp;}\r\n}; \r\n\r\nconst square = new Rectangle(10, 10);\r\n\r\nconsole.log(square.height); // output: &quot;10&quot;\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Javascript classes are just templates for creating objects. with the new keyword, you can create a new object from the class. you can also use the extend keyword to create a new object from the class.&lt;/p&gt;&lt;p&gt;Example of Class component:&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;class App extends Component {\r\n &amp;nbsp;render() {\r\n &amp;nbsp; &amp;nbsp;return (\r\n &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;lt;div&amp;gt;App&amp;lt;/div&amp;gt;\r\n &amp;nbsp; &amp;nbsp;)\r\n &amp;nbsp;}\r\n}\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Here we created a class component by extending the component class. it&rsquo;s just the javascript class that returns HTML/JSX.&lt;/p&gt;&lt;h2&gt;✨ #4 - Async/Await&lt;/h2&gt;&lt;p&gt;Async-await is a very important javascript concept. but before we get into them you&rsquo;ll first need to understand asynchronous javascript.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;Asynchronous JavaScript&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;When building web apps you&rsquo;ll need to make API calls to get data from the backend and these fetching operations might take a while to finish.&lt;/p&gt;&lt;p&gt;While fetching the data all the other functionalities would freeze. To prevent this javascript introduced asynchronous functions. That means asynchronous functions help you write code that will get the data from the API at the same time won&rsquo;t block the rest of the application.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;This is asynchronous javascript.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;There are a few ways to handle asynchronous code, but I am going to talk about async/await. because it is currently the best way to handle async code.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Let&rsquo;s start with an example:&lt;/strong&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;async function getPersonsInfo(name) {\r\n &amp;nbsp;const people = await server.getPeople();\r\n &amp;nbsp;const person = people.find(person =&amp;gt; { return person.name === name });\r\n &amp;nbsp;return person;\r\n} \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Async:&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;the async keyword declares that this function is an asynchronous function. an async function automatically returns a promise. an async keyword can be used in all types of functions. like, arrow function, callback function, or function expression.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Await:&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;What the await keyword does is it says an async function to wait to finish the operation. It is the same as the .then() block of a Promise. It&rsquo;s just much cleaner.&lt;/p&gt;&lt;p&gt;One note here is that you can only use the await keyword inside an async function, otherwise you&rsquo;ll get an error.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;Handling Errors&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;As you can see the await keyword waits for the promise to resolve and returns the result. we need to keep in mind that our promise can be rejected. so, now we need a way to handle that.&lt;/p&gt;&lt;p&gt;We can handle errors in the async function in 2 ways.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Solution #1&lt;/strong&gt; - Use try ... catch() blocks:&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;asyncFunctionCall().catch(error =&amp;gt; {\r\n &amp;nbsp;console.error(error)\r\n});\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Solution #2&lt;/strong&gt; - Use Inner try ... catch() block:&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;async function getPersonsInfo(name) {\r\n &amp;nbsp;try {\r\n &amp;nbsp; &amp;nbsp;const people = await server.getPeople();\r\n &amp;nbsp; &amp;nbsp;const person = people.find(person =&amp;gt; { return person.name === name });\r\n &amp;nbsp; &amp;nbsp;console.log(person)\r\n &amp;nbsp;} catch (error) {\r\n &amp;nbsp; &amp;nbsp;console.error(error)\r\n &amp;nbsp;}\r\n} \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Async/await in React&lt;/strong&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;const App = () =&amp;gt; {\r\n\r\n useEffect(() =&amp;gt; {\r\n &amp;nbsp;// declare the data fetching function\r\n &amp;nbsp;const fetchData = async () =&amp;gt; {\r\n &amp;nbsp; &amp;nbsp;//get the data\r\n &amp;nbsp; &amp;nbsp;const data = await fetch(&#039;&amp;lt;https://yourapi.com&amp;gt;&#039;);\r\n &amp;nbsp;}\r\n\r\n &amp;nbsp;// call the function\r\n &amp;nbsp;fetchData()\r\n &amp;nbsp;// make sure to catch any error\r\n &amp;nbsp; &amp;nbsp;.catch(console.error);\r\n &amp;nbsp; &amp;nbsp;}, [])\r\n\r\n &amp;nbsp;return &amp;lt;&amp;gt;...&amp;lt;/&amp;gt;;\r\n};\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;✨ #5 - Array methods&lt;/h2&gt;&lt;p&gt;Array methods are ways to manipulate arrays in javascript. Knowing how these methods work will come in handy in the future. Because when you start building projects with react you&rsquo;ll use them all the time.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;&lt;strong&gt;array.map()&lt;/strong&gt;&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;array.map() creates a new array by applying a callback function on each element of the array. also, it does not change the original array.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Code Sample&lt;/strong&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;const numbers = [2, 3, 4, 6];\r\nconst newArr = numbers.map(myFunction)\r\n\r\nfunction myFunction(num) {\r\n &amp;nbsp;return num * 2;\r\n} \r\n\r\nconsole.log(numbers); //2,3,4,6\r\nconsole.log(newArr); //4,6,8,12 \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;&lt;strong&gt;array.filter()&lt;/strong&gt;&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;array.filter() loop through all the elements of an array and filter out the elements that match the condition in the callback function. just like the map method, it doesn&#039;t change the old array.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Code Sample&lt;/strong&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;const ages = [32, 33, 16, 40];\r\nconst result = ages.filter(checkAdult);\r\n\r\nfunction checkAdult(age) {\r\n &amp;nbsp;return age &amp;gt;= 18;\r\n}\r\n\r\nconsole.log(ages);\r\nconsole.log(result); \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;Example in React for map()&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;function App() {\r\n &amp;nbsp;const names = [&#039;sam&#039;, &#039;jack&#039;, &#039;tom&#039;, &#039;dave&#039;];\r\n\r\n &amp;nbsp;return (\r\n &amp;nbsp; &amp;nbsp;&amp;lt;div className=&#039;App&#039;&amp;gt;\r\n &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;lt;h1&amp;gt;Hello world!&amp;lt;/h1&amp;gt;\r\n &amp;nbsp; &amp;nbsp; &amp;nbsp;{\r\n &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;names.map(name =&amp;gt; &amp;lt;h2&amp;gt;hello {name}&amp;lt;/h2&amp;gt;)\r\n &amp;nbsp; &amp;nbsp; &amp;nbsp;}\r\n &amp;nbsp; &amp;nbsp;&amp;lt;/div&amp;gt;\r\n &amp;nbsp;);\r\n}\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;The above sample renders all the elements of the names array using map. This is very useful and probably you&rsquo;ll use it all the time.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;Example in React for filter()&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;const numbers = [1, 2, 3, 4, 5, 6, 7];\r\nconst lessThanFive = numbers.filter(num =&amp;gt; num &amp;lt; 5);\r\n\r\nconsole.log(lessThanFive); //1,2,3,4\r\nconsole.log(numbers) //1, 2, 3, 4, 5, 6, 7\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Here I filtered the numbers array to less than five. This method is also very important for creating filter functionalities.&lt;/p&gt;&lt;h2&gt;✨ #6 - Ternary Operator&lt;/h2&gt;&lt;p&gt;Ternary Operator is the simplified form of the if/else conditional. Basically, It&rsquo;s just another way to write if-else conditional.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Code Sample&lt;/strong&gt; - Classic If/else&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;//if/else\r\nif (loading) {\r\n &amp;nbsp;loadingComponent();\r\n} else {\r\n &amp;nbsp;App();\r\n} \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Code Sample&lt;/strong&gt; - Ternary Operator&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;loading ? loadingComponent() : App();\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;React Sample&lt;/strong&gt; - Ternary Operator&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;class App extends Component {\r\n &amp;nbsp;render() {\r\n &amp;nbsp; &amp;nbsp;const isLoggedIn = this.state.isLoggedIn;\r\n &amp;nbsp; &amp;nbsp;return (\r\n &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;lt;div&amp;gt;\r\n &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;The user is &amp;lt;b&amp;gt;{isLoggedIn ? &#039;currently&#039; : &#039;not&#039;}&amp;lt;/b&amp;gt; logged in.\r\n &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;lt;/div&amp;gt;\r\n &amp;nbsp; &amp;nbsp;);\r\n &amp;nbsp;}\r\n}\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;✨ #7 - Template Literal&lt;/h2&gt;&lt;p&gt;If you are building a web app, it&rsquo;s normal that you need to work with strings. In earlier versions of Javascript (ES5), if you wanted to concatenate(add) a string to a variable you had to use the + operator. And it doesn&rsquo;t look good and is not easy to understand.&lt;/p&gt;&lt;p&gt;But now you can use ES6 template literal. Template literal uses ${} notation to concatenate strings with variables.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Code Sample&lt;/strong&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;const name = &quot;Sam&quot;;\r\nconst greeting = `Hello, ${name}!`\r\nconsole.log(greeting) // Hello, Sam! \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;✨ #8 - Destructuring&lt;/h2&gt;&lt;p&gt;Destructuring is a way to extract values from an Object or Array into variables.&lt;/p&gt;&lt;p&gt;In earlier versions of Javascript (ES5), if you wanted to extract a value from an array or object you would do this:&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;//Array\r\nconst foo = [&#039;one&#039;, &#039;two&#039;];\r\nconst one = foo[0]\r\n\r\nconst bar = [&quot;Tom&quot;, &quot;Jerry&quot;];\r\nconst tom = bar[0] \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Now what you can do with ES6 (modern version of Javascript) restructuring is this:&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;const foo = [&#039;one&#039;, &#039;two&#039;];\r\nconst [one] = foo;\r\n\r\n//Object\r\nconst bar = [&quot;Tom&quot;, &quot;Jerry&quot;];\r\nconst {tom} = bar \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;It will assign the value one to the variable one. This is much cleaner and more intuitive.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Example In React.js&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;To pass data to components React uses props. Props are just like arguments in a normal function.&lt;/p&gt;&lt;p&gt;The point here is that props are objects. For example, if you had a component named Greeting and it takes a prop name:&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;lt;Greeting name={&quot;Sam&quot;} /&amp;gt;\r\n\r\nIf you want to access it, you need to write props.name.\r\nfunction Greeting(props) {\r\n &amp;nbsp;return (\r\n &amp;nbsp; &amp;nbsp;&amp;lt;div&amp;gt;hello {props.name}&amp;lt;/div&amp;gt;\r\n &amp;nbsp;)\r\n} \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;But also, you can use restructuring like this:&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;function Greeting(props) {\r\n &amp;nbsp;const {name} = props\r\n &amp;nbsp;return (\r\n &amp;nbsp; &amp;nbsp;&amp;lt;div&amp;gt;hello {name}&amp;lt;/div&amp;gt;\r\n &amp;nbsp;)\r\n} \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Now you can use the name without calling props.name.&lt;/p&gt;&lt;h2&gt;✨ #9 - Spread Operator&lt;/h2&gt;&lt;p&gt;A spread operator is used to copy a whole or part of an array or an object.&lt;/p&gt;&lt;p&gt;The spread operator is used to create an exact copy of an Array or an Object. it is very handy when working with react states because states are immutable.&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;const arrayOne = [1, 2, 3];\r\nconst arrayTwo = [4, 5, 6];\r\nconst arrayThree = [...arrayOne, ...arrayTwo];\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;✨ #10 - Import and Export&lt;/h2&gt;&lt;p&gt;As mentioned before, React is a component-based UI framework. So, to build a complete application you need to use the components you built.&lt;/p&gt;&lt;p&gt;To use the component you need to import them into the file you want to use. you can use export and import to use components in your application.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;&lt;strong&gt;Export Sample&lt;/strong&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;// app.js file - Exports the &ldquo;App&rdquo; object\r\nfunction App() {\r\n &amp;nbsp;return (\r\n &amp;nbsp; &amp;nbsp;&amp;lt;div&amp;gt;App&amp;lt;/div&amp;gt;\r\n &amp;nbsp;)\r\n}\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;Import Sample&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;// index.js - Use the &ldquo;App&rdquo; object via an &ldquo;import&rdquo;\r\nimport App from &#039;./App&#039;;\r\nReactDOM.render(\r\n &amp;nbsp;&amp;lt;React.StrictMode&amp;gt;\r\n &amp;nbsp; &amp;nbsp;&amp;lt;App /&amp;gt;\r\n &amp;nbsp;&amp;lt;/React.StrictMode&amp;gt;,\r\n &amp;nbsp;document.getElementById(&#039;root&#039;)\r\n); \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;After this short introduction of 10 useful JS concepts, we can use in React, curious minds might go further and code a simple Hello World in React.&lt;/p&gt;&lt;h2&gt;✨ Code Hello World project with React&lt;/h2&gt;&lt;p&gt;This section explains how to code a classic &ldquo;Hello World&rdquo; project using React and Javascript.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;&lt;strong&gt;Step#1: Install the tools&lt;/strong&gt;&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;To get started with React first you need to install Node.js. You can download Node from here.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;&lt;strong&gt;Step#2: Build the app&lt;/strong&gt;&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;After you&rsquo;ve installed NodeJS, open up the terminal/command line and create your project folder with this command:&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;$ mkdir hello-react \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Then generate a basic React project using CRA (create-react-app tool).&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;$ npx create-react-app my-app\r\n$ cd my-app\r\n$ npm start \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;After running all these commands your browser will open up the React project on port 3000.&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;import React from &#039;react&#039;\r\n\r\nfunction App() {\r\n &amp;nbsp;return (\r\n &amp;nbsp; &amp;nbsp;&amp;lt;div&amp;gt;&amp;lt;/div&amp;gt;\r\n &amp;nbsp;)\r\n}\r\n\r\nexport default App\r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;And write an h1 tag with Hello world! inside the div.&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;import React from &#039;react&#039;\r\n\r\nfunction App() {\r\n &amp;nbsp;return (\r\n &amp;nbsp; &amp;nbsp;&amp;lt;div&amp;gt;\r\n &amp;nbsp; &amp;nbsp;&amp;lt;h1&amp;gt;hello world!&amp;lt;/h1&amp;gt;\r\n &amp;nbsp; &amp;nbsp;&amp;lt;/div&amp;gt;\r\n &amp;nbsp;)\r\n}\r\n\r\nexport default App \r\n&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;At this point, you should see Hello World message in the browser.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;&lt;strong&gt;Congrats!&lt;/strong&gt; From now on you are a React (beginner) developer.&lt;/p&gt;&lt;/blockquote&gt;&lt;h2&gt;✨ Conclusion&lt;/h2&gt;&lt;p&gt;You start learning/using React without understanding the &lt;strong&gt;Javascript basic concepts&lt;/strong&gt; you might be unproductive and not use the full power of &lt;strong&gt;React&lt;/strong&gt;.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;Thanks for reading! For more resources, feel free to access:&lt;/p&gt;&lt;/blockquote&gt;&lt;ul&gt;&lt;li&gt;✨ More &lt;a href=&quot;https://appseed.us/admin-dashboards/open-source&quot;&gt;Free Dashboards&lt;/a&gt; crafted in Django, Flask, and &lt;a href=&quot;https://appseed.us/apps/react&quot;&gt;React&lt;/a&gt;&lt;/li&gt;&lt;li&gt;✨ More &lt;a href=&quot;https://www.admin-dashboards.com/&quot;&gt;Admin Dashboards&lt;/a&gt; - a huge index with products&lt;/li&gt;&lt;/ul&gt;', 1, '2022-04-10 17:16:32');
INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(20, 11, 5, 'Codedamn is changing the way of Learning how to Code', '1649597195_zi7fc6umyyr8no2d2kl0.webp', '&lt;p&gt;&lt;i&gt;Web development&lt;/i&gt; is one of the highest paying tech domain in 2022.&lt;br&gt;And there are many Free and Paid Resources are available around the Internet yet so many Developers/students face issues while learning it, because they realize the coursework for the most of programming Resource/Program is too intense/Unstructured, or they don&#039;t get satisfactory outcomes from their learning. but there&#039;s Perfect Blend of learning Web development and Getting the results of your learning and that is called Codedamn.&lt;/p&gt;&lt;p&gt;Let&rsquo;s explore how Codedamn can help you to improve your Learning experience and can make you a better developer.&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;https://res.cloudinary.com/practicaldev/image/fetch/s--mp8PtRFI--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/ulpa9je8aun1mafu6drq.png&quot;&gt;&lt;img src=&quot;https://res.cloudinary.com/practicaldev/image/fetch/s--mp8PtRFI--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/ulpa9je8aun1mafu6drq.png&quot; alt=&quot;Codedamn Image&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;What is Codedamn?&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;https://codedamn.com/&quot;&gt;&lt;i&gt;Codedamn&lt;/i&gt;&lt;/a&gt; is&amp;nbsp;an interactive learn-to-code platform where you can learn different Technologies and languages with structured Learning path. Codedamn is building the largest interactive coding platform. Learn to code, build projects and deploy apps right from your browser. with Codedamn learn different concepts and test what you learn by practicing it on your browser itself.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Advantages of using Codedamn&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;There are many Advantages that Codedamn provides you over any other learning platform and here are some Key advantages&lt;/p&gt;&lt;ol&gt;&lt;li&gt;&lt;a href=&quot;https://dev.to/upadhyayhari_/codedamn-is-changing-the-way-of-learning-how-to-code-20oj#chapter-1&quot;&gt;Detailed Learning Paths&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=&quot;https://dev.to/upadhyayhari_/codedamn-is-changing-the-way-of-learning-how-to-code-20oj#chapter-2&quot;&gt;Codedamn&#039;s Playgrounds&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=&quot;https://dev.to/upadhyayhari_/codedamn-is-changing-the-way-of-learning-how-to-code-20oj#chapter-3&quot;&gt;Track Your Learning Progress&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=&quot;https://dev.to/upadhyayhari_/codedamn-is-changing-the-way-of-learning-how-to-code-20oj#chapter-4&quot;&gt;Learn by building Projects&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=&quot;https://dev.to/upadhyayhari_/codedamn-is-changing-the-way-of-learning-how-to-code-20oj#chapter-5&quot;&gt;Community Support&lt;/a&gt;&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;Let&rsquo;s explore the advantages that Codedamn provides and learn how it makes your learning experience Superior.&lt;/p&gt;&lt;p&gt;1.Detailed Learning Paths&lt;/p&gt;&lt;p&gt;As Previously mentioned there are many Resources for Learning Web development but they are not Well structured. Therefore Codedamn provides you very structured &lt;a href=&quot;https://codedamn.com/learning-paths&quot;&gt;&lt;i&gt;Learning path/Curriculum &lt;/i&gt;&lt;/a&gt;curated by Experienced developers according to the market demand. Now learn Frontend, Backend or FullStack Development in a structured way and the way it matters most.&lt;br&gt;&lt;a href=&quot;https://res.cloudinary.com/practicaldev/image/fetch/s--yhh8MWcs--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/24wz0j4zfy1etsw2c5be.png&quot;&gt;&lt;img src=&quot;https://res.cloudinary.com/practicaldev/image/fetch/s--yhh8MWcs--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/24wz0j4zfy1etsw2c5be.png&quot; alt=&quot;Codedamn &quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;2.Codedamn&#039;s Playgrounds&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;https://codedamn.com/playgrounds&quot;&gt;&lt;i&gt;Codedamn&#039;s Playgrounds&lt;/i&gt;&lt;/a&gt; enables you to have a real development experience minus the development setup. Playgrounds Is a platform which runs in your browser connected to computers in the cloud.&lt;br&gt;Codedamn playgrounds helps you to get out of Tutorial hell.&lt;br&gt;Main objective of Playgrounds is to Code and run your own experiments, try things around and build something new from what you have learnt without ever leaving the Browser.&lt;/p&gt;&lt;p&gt;Playgrounds currently supports these Coding languages.&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Html/Css&lt;/li&gt;&lt;li&gt;ReactJs&lt;/li&gt;&lt;li&gt;VueJs&lt;/li&gt;&lt;li&gt;NextJs&lt;/li&gt;&lt;li&gt;Nodejs&lt;/li&gt;&lt;li&gt;Solidity&lt;/li&gt;&lt;li&gt;Python and&lt;/li&gt;&lt;li&gt;Swift&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;a href=&quot;https://res.cloudinary.com/practicaldev/image/fetch/s--_HH_9UOS--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/v00sd8svysp4tjr4dpd3.png&quot;&gt;&lt;img src=&quot;https://res.cloudinary.com/practicaldev/image/fetch/s--_HH_9UOS--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/v00sd8svysp4tjr4dpd3.png&quot; alt=&quot;Playgrounds image&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;3.Track Your Learning Progress&lt;/p&gt;&lt;p&gt;Web development is very broad and complex topic, for that reason keeping the track of what you have learned is very essential.&lt;br&gt;Codedamn provides you the &lt;a href=&quot;https://codedamn.com/dashboard&quot;&gt;&lt;i&gt;Dashboard functionality&lt;/i&gt;&lt;/a&gt; which assists you to keep track the track of what you have learned till now.&lt;br&gt;Dashboard helps you to track your learning, Track your Learning activity and set learning target for yourself. so you can achieve your goals more quickly.&lt;/p&gt;&lt;h2&gt;&lt;img src=&quot;https://res.cloudinary.com/practicaldev/image/fetch/s--xCZhI_Zy--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/prate79phkjg7g1pwkoo.png&quot; alt=&quot;dashboard image&quot;&gt;&lt;/h2&gt;&lt;p&gt;4.Learn by building Projects&lt;/p&gt;&lt;p&gt;Building Projects is a practical and hands-on way to reinforce your learnings from learning paths. building the Projects to Enhance your skills to is the best practice you can do. On Codedamn Learn the skills by Building Industry standard projects available in your dashboard with detailed guide to how to get started with your preferred Project.&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;https://res.cloudinary.com/practicaldev/image/fetch/s--VBYHRGOW--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/c7shlr8gr54kn19i8shj.png&quot;&gt;&lt;img src=&quot;https://res.cloudinary.com/practicaldev/image/fetch/s--VBYHRGOW--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/c7shlr8gr54kn19i8shj.png&quot; alt=&quot;Projects page&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;5.Community Support&lt;/p&gt;&lt;p&gt;Learning Web-development alone is difficult. You might run into some error or might not understand the specific topic, Therefore Codedamn has tightly integrated the learning platform with Codedamn&#039;s Discord community of learners and teachers. &lt;a href=&quot;https://discord.com/invite/brtAY92J2r&quot;&gt;&lt;i&gt;Codedamn&#039;s Discord Community&lt;/i&gt;&lt;/a&gt; will always be with you in your learning journey.&lt;br&gt;&lt;a href=&quot;https://res.cloudinary.com/practicaldev/image/fetch/s--sy_yMaur--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/6viap5ybobqy6o6moagc.png&quot;&gt;&lt;img src=&quot;https://res.cloudinary.com/practicaldev/image/fetch/s--sy_yMaur--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/6viap5ybobqy6o6moagc.png&quot; alt=&quot;learn image&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 1, '2022-04-10 18:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `commented_on` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `user_id`, `post_id`, `message`, `commented_on`, `created_at`) VALUES
(1, 11, 10, 'nice post', '2022-04-04 21:44:24', '2022-04-04 21:44:24'),
(2, 13, 10, 'The living document', '2022-04-04 21:45:05', '2022-04-04 21:45:05'),
(3, 13, 9, 'The Open API', '2022-04-04 21:45:32', '2022-04-04 21:45:32'),
(5, 13, 8, 'The first is the take-home coding interview.', '2022-04-04 23:14:24', '2022-04-04 23:14:24'),
(6, 13, 7, 'There are two ways to set up and activate your robot', '2022-04-04 23:15:05', '2022-04-04 23:15:05'),
(7, 11, 5, 'Artificial Intelligence (AI) has long been an essential part of any business', '2022-04-05 16:56:21', '2022-04-05 16:56:21'),
(10, 13, 19, 'This is a really really good breakdown of the concepts and a few things have just clicked in my mind thanks to reading this. Cheers!', '2022-04-10 17:26:11', '2022-04-10 17:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment_replys`
--

CREATE TABLE `post_comment_replys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `reply_message` longtext NOT NULL,
  `commented_on` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_comment_replys`
--

INSERT INTO `post_comment_replys` (`id`, `user_id`, `comment_id`, `reply_message`, `commented_on`, `created_at`) VALUES
(6, 11, 2, 'agree with you', '2022-04-05 22:51:34', '2022-04-05 22:51:34'),
(7, 11, 2, 'thank you', '2022-04-05 22:56:47', '2022-04-05 22:56:47'),
(8, 11, 6, '@facewash agreed', '2022-04-05 23:58:19', '2022-04-05 23:58:19'),
(9, 13, 9, 'agree with you', '2022-04-07 19:20:24', '2022-04-07 19:20:24'),
(10, 11, 9, '@joyboy tank you', '2022-04-07 19:21:09', '2022-04-07 19:21:09'),
(11, 11, 9, '@joyboy tank you', '2022-04-07 19:27:18', '2022-04-07 19:27:18'),
(12, 11, 10, 'thank you reading', '2022-04-10 17:31:56', '2022-04-10 17:31:56'),
(13, 13, 12, '@facewash welcome', '2022-04-10 17:39:07', '2022-04-10 17:39:07'),
(14, 13, 12, '@facewash welcome', '2022-04-10 17:40:07', '2022-04-10 17:40:07'),
(15, 11, 12, '@facewash agreed', '2022-04-10 20:48:22', '2022-04-10 20:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `thread_topic_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `user_id`, `thread_topic_id`, `title`, `body`, `published`, `created_at`, `update_at`) VALUES
(4, 13, 3, 'Which Faculty is best for CSE 311? ', '&lt;p&gt;Can anyone please tell me which faculty is best for the grade?&lt;/p&gt;', 1, '2022-04-02 02:41:29', '2022-04-02 02:41:29'),
(5, 11, 3, 'How do you orient to a ', '&lt;p&gt;I started at Forem in October 2021, and needed to orient myself quickly to a code base that powered sites much beloved by their community.&lt;/p&gt;&lt;p&gt;So, let&#039;s talk &quot;How do you orient to a new to you code base?&quot;&lt;/p&gt;', 1, '2022-04-08 00:41:25', '2022-04-08 00:41:25'),
(6, 11, 2, 'How I developed my modern open source portfolio', '&lt;p&gt;For quite some time now I have been working on my portfolio website &lt;a href=&quot;https://josemukorivo.com/&quot;&gt;www.josemukorivo.com&lt;/a&gt;. The portfolio I was using before this one was developed back in 2018 when I was doing my internship. Recently I felt it was outdated, in fact the site was never updated after the launch.&lt;/p&gt;&lt;h2&gt;Overview&lt;/h2&gt;&lt;p&gt;I like to think of a portfolio as a developer playground so sometimes you can even see a portfolio that is running on kubernetes with 10 replicas 😃 simply because the developer wanted to test out some cool kubernetes features. My point here is that the stack I chose may be an overkill for a portfolio, but hey why not😎?&lt;/p&gt;', 1, '2022-04-10 18:00:38', '2022-04-10 18:00:38'),
(7, 11, 1, 'Forem for Android is Here!', '&lt;p&gt;Today, I&#039;m excited to share that &lt;a href=&quot;https://play.google.com/store/apps/details?id=com.forem.android&quot;&gt;&lt;i&gt;the Forem app for Android&lt;/i&gt;&lt;/a&gt; is now available for download and immediate use. 🎉🎉🎉&lt;/p&gt;&lt;p&gt;This fantastic news comes after months of beta testing and collecting valuable feedback from Forem Creators, DEV moderators &amp;amp; Trusted Users on DEV. We&#039;re so proud of this mobile app built for the many Android users that are part of DEV, &lt;a href=&quot;https://community.codenewbie.org/&quot;&gt;CodeNewbie Community&lt;/a&gt;, and the entire Forem ecosystem.&lt;/p&gt;&lt;p&gt;Much like the Forem &lt;a href=&quot;https://apps.apple.com/us/app/forem/id1536933197&quot;&gt;iOS&lt;/a&gt; app, our Android app is meant to help you move through your day without sacrificing smooth access to new articles, podcasts, and discussions across any Forem community you&#039;re a member of. With a more seamless experience and a wider world of Forem access at your fingertips, we see our Android app as a huge improvement from the now discontinued DEV app.&lt;/p&gt;&lt;h2&gt;&lt;a href=&quot;https://play.google.com/store/apps/details?id=com.forem.android&quot;&gt;&amp;gt;&amp;gt; Download the Forem Android App today&lt;/a&gt;&lt;/h2&gt;&lt;p&gt;&lt;strong&gt;Here are some of the features you&#039;ll get with the Forem &lt;/strong&gt;&lt;a href=&quot;https://apps.apple.com/us/app/forem/id1536933197&quot;&gt;&lt;strong&gt;iOS&lt;/strong&gt;&lt;/a&gt;&lt;strong&gt; &amp;amp; &lt;/strong&gt;&lt;a href=&quot;https://play.google.com/store/apps/details?id=com.forem.android&quot;&gt;&lt;strong&gt;Android&lt;/strong&gt;&lt;/a&gt;&lt;strong&gt; apps...&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Discover, preview, &amp;amp; join new Forem communities&lt;/p&gt;&lt;p&gt;Browse the list of available public Forems or add a privately listed Forem you belong to. Tap into each for a preview before you decide to join.&lt;/p&gt;&lt;p&gt;Access both public and private Forems&lt;/p&gt;&lt;p&gt;Our dropdown menu or left-right swiping functionality allows you to explore different communities through one central list.&lt;/p&gt;&lt;p&gt;Browse mobile-optimized content&lt;/p&gt;&lt;p&gt;Articles, discussions, and podcasts on public Forems are available for your enjoyment &mdash; whether you&#039;re a member of them or not.&lt;/p&gt;&lt;p&gt;Share images on the go&lt;/p&gt;&lt;p&gt;Post while the inspiration strikes with our mobile image uploader.&lt;/p&gt;&lt;p&gt;Stay up-to-date with the latest activities&lt;/p&gt;&lt;p&gt;Push notifications keep you in the loop with the latest news about your posts, comments, and network.&lt;/p&gt;&lt;p&gt;... and lots more!&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;&lt;strong&gt;Ready to get started with Forem on mobile? Download Forem for &lt;/strong&gt;&lt;a href=&quot;https://play.google.com/store/apps/details?id=com.forem.android&quot;&gt;&lt;strong&gt;Android&lt;/strong&gt;&lt;/a&gt;&lt;strong&gt; and &lt;/strong&gt;&lt;a href=&quot;https://apps.apple.com/us/app/forem/id1536933197&quot;&gt;&lt;strong&gt;iOS&lt;/strong&gt;&lt;/a&gt;&lt;strong&gt; today.&lt;/strong&gt;&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;&lt;a href=&quot;https://res.cloudinary.com/practicaldev/image/fetch/s--3Qgzsqej--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://forem.dev/remoteimages/uploads/articles/xsikbngt9ud22fyt4fyt.png&quot;&gt;&lt;img src=&quot;https://res.cloudinary.com/practicaldev/image/fetch/s--3Qgzsqej--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://forem.dev/remoteimages/uploads/articles/xsikbngt9ud22fyt4fyt.png&quot; alt=&quot;Android app preview - preview and login to Forems&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;Let us know what you think of our apps! If you love them, we hope you&#039;ll consider leaving us a five-star review. ⭐️⭐️⭐️⭐️⭐️&lt;/p&gt;', 1, '2022-04-10 18:10:08', '2022-04-10 18:10:08'),
(8, 11, 2, 'What is your Headless CMS of choice ?', '&lt;p&gt;Hello everyone. So recently I discovered the world of CMS like Sanity or GraphCMS.&lt;/p&gt;&lt;p&gt;Well, I already knew WordPress before but never paid attention to it since I wanted to learn how to code before learning how to make websites, so yeah anyway.&lt;/p&gt;&lt;p&gt;Do you have a preference for CMS in particular?&amp;nbsp;&lt;/p&gt;&lt;p&gt;If yes, then which one and why?&amp;nbsp;&lt;/p&gt;&lt;p&gt;Is a CMS more suitable for a specific task than another one?&lt;/p&gt;&lt;p&gt;Please feel free to share your knowledge and opinions with me in the comments.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Having used many over the years, I really love Webiny. It&#039;s serverless so you can host it on your own cloud. It has a rich feature set, like file manager with CDN propagation and no-code content model creation. Check it out! &lt;a href=&quot;https://www.webiny.com/enterprise-serverless-cms/headless-cms&quot;&gt;webiny.com/enterprise-serverless-c...&lt;/a&gt;&lt;/p&gt;', 1, '2022-04-10 19:27:54', '2022-04-10 19:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `thread_comments`
--

CREATE TABLE `thread_comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `commented_on` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread_comments`
--

INSERT INTO `thread_comments` (`id`, `user_id`, `thread_id`, `message`, `commented_on`, `created_at`) VALUES
(3, 13, 6, 'I have open sourced my portfolio so that other people can learn from it and also help to improve. ', '2022-04-10 18:07:08', '2022-04-10 18:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `thread_comment_replys`
--

CREATE TABLE `thread_comment_replys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `reply_message` longtext NOT NULL,
  `commented_on` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread_comment_replys`
--

INSERT INTO `thread_comment_replys` (`id`, `user_id`, `comment_id`, `reply_message`, `commented_on`, `created_at`) VALUES
(1, 11, 2, 'It depends  For every project, I try and follow this flow:  Read the docs - get the most inconvenient thing out of the way first Read the specs or latest customer requests Try and understand: what\'s the goal of this software? what\'s the expected behavior?', '2022-04-08 01:29:29', '2022-04-08 01:29:29'),
(2, 11, 1, '@facewash hell yeah', '2022-04-08 01:33:16', '2022-04-08 01:33:16'),
(3, 11, 3, 'Do not copy the code and host it without modifications, I spent some time doing this project would love it to be unique. ', '2022-04-10 18:07:29', '2022-04-10 18:07:29'),
(4, 13, 3, '@facewash Make sure you change the design and other things so that it doesn\'t look exactly like mine', '2022-04-10 18:07:55', '2022-04-10 18:07:55'),
(5, 11, 4, '@joyboy I hope this article helped you with something.', '2022-04-10 18:08:28', '2022-04-10 18:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `thread_topics`
--

CREATE TABLE `thread_topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread_topics`
--

INSERT INTO `thread_topics` (`id`, `name`, `description`, `created_at`) VALUES
(1, 'News & Announcement', '<p>Latest News &amp; Updates!</p>', '2022-03-31 22:33:27'),
(2, 'General Discussion', '<p>Ask a question, post a suggestion, start a discussion</p>', '2022-03-31 23:06:22'),
(3, 'Course Review', '<p>Review courses that you want to study</p>', '2022-04-01 22:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`, `created_at`) VALUES
(5, 'Programming', '<p>Programming is the process of creating a set of instructions that tell a computer how to perform a task.</p>', '2022-03-20 18:35:49'),
(6, 'Engineering', '<p>Engineering, the application of science to the optimum conversion of the resources of nature to the uses of humankind.</p>', '2022-03-20 18:36:44'),
(7, 'Robotics', '<p>Robotics is an interdisciplinary branch of computer science and engineering.</p>', '2022-03-20 18:37:17'),
(8, 'Finance', '<p>Finance is a broad term that describes activities associated with banking, leverage or debt, credit, capital markets, funds, and investments.</p>', '2022-03-20 18:38:13'),
(9, 'Artificial Intelligence', '<p>Artificial intelligence (AI) is the ability of a computer or a robot controlled by a computer to do tasks that are usually done by humans because they require human intelligence and discernment.</p>', '2022-03-20 18:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `profile_tagline` varchar(255) NOT NULL,
  `location` varchar(60) NOT NULL,
  `about_me` text NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `tw_link` varchar(255) NOT NULL,
  `lk_link` varchar(255) NOT NULL,
  `yt_link` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `first_name`, `last_name`, `profile_tagline`, `location`, `about_me`, `fb_link`, `tw_link`, `lk_link`, `yt_link`, `created_at`) VALUES
(11, 1, 'facewash', 'facewash@gmail.com', '$2y$10$AjJcQEaNyt9E1AKShPtyBeXgcUa8ZlhJGuLxkI0udcefJLXo2LKxm', 'face', 'wash', 'No#1 Facewash in the world', 'Bangladesh', 'As the first step in your skin-care routine, face wash plays a very important role in keeping your skin balanced.                                         ', 'https://www.facebook.com/facewash', 'https://twitter.com/facewash', 'https://www.linkedin.com/facewash', 'https://www.youtube.com/facewash', '2022-03-20 17:27:58'),
(13, 0, 'joyboy', 'joyboy@gmail.com', '$2y$10$TVggX8RtNakR1CC.ojrvxOl5nt1DH//gY2Cq6AKiZEt0qHMC2zCMG', 'Joy', 'Boy', 'I\'m Awesome', 'Outer World', 'Joy with no bound                                                                                    ', 'https://facebook.com/joyboy', 'https://twitter.com/joyboy', 'https://linkedin.com/joyboy', 'https://youtube.com/joyboy', '2022-03-20 21:51:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comment_replys`
--
ALTER TABLE `post_comment_replys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thread_topic_id` (`thread_topic_id`);

--
-- Indexes for table `thread_comments`
--
ALTER TABLE `thread_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thread_id` (`thread_id`);

--
-- Indexes for table `thread_comment_replys`
--
ALTER TABLE `thread_comment_replys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thread_topics`
--
ALTER TABLE `thread_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post_comment_replys`
--
ALTER TABLE `post_comment_replys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `thread_comments`
--
ALTER TABLE `thread_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thread_comment_replys`
--
ALTER TABLE `thread_comment_replys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `thread_topics`
--
ALTER TABLE `thread_topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_ibfk_1` FOREIGN KEY (`thread_topic_id`) REFERENCES `thread_topics` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `thread_comments`
--
ALTER TABLE `thread_comments`
  ADD CONSTRAINT `thread_comments_ibfk_1` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
