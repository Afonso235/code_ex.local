const dbMovies ={
  "genres": [
      "Comedy",
      "Drama",
      "Adventure",
      "Thriller",
      "Animation",
      "Action",
      "Sci-Fi",
      "Western",
      "Horror"      
  ],
  "movies": [
      {
          "id": 3,
          "title": "The Shawshank Redemption",
          "year": "1994",
          "runtime": "142",
          "genres": "Drama",
          "director": ["Frank Darabont"],
          "actors": ["Tim Robbins", "Morgan Freeman", "Bob Gunton", "William Sadler"],
          "summary": "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/en/8/81/ShawshankRedemptionMoviePoster.jpg"
      },
      {
          "id": 6,
          "title": "Ratatouille",
          "year": "2007",
          "runtime": "111",
          "genres": "Animation",
          "director": ["Brad Bird", "Jan Pinkava"],
          "actors": ["Patton Oswalt", "Ian Holm", "Lou Romano", "Brian Dennehy"],
          "summary": "A rat who can cook makes an unusual alliance with a young kitchen worker at a famous restaurant.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/en/5/50/RatatouillePoster.jpg"
      },
      {
          "id": 8,
          "title": "Memento",
          "year": "2000",
          "runtime": "113",
          "genres": "Thriller",
          "director": ["Christopher Nolan"],
          "actors": ["Guy Pearce", "Carrie-Anne Moss", "Joe Pantoliano", "Mark Boone Junior"],
          "summary": "A man juggles searching for his wife's murderer and keeping his short-term memory loss from being an obstacle.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/en/thumb/c/c7/Memento_poster.jpg/220px-Memento_poster.jpg"
      },
      {
          "id": 11,
          "title": "Apocalypto",
          "year": "2006",
          "runtime": "139",
          "genres": "Drama",
          "director": ["Mel Gibson"],
          "actors": ["Rudy Youngblood", "Dalia Hernández", "Jonathan Brewer", "Morris Birdyellowhead"],
          "summary": "As the Mayan kingdom faces its decline, the rulers insist the key to prosperity is to build more temples and offer human sacrifices. Jaguar Paw, a young man captured for sacrifice, flees to avoid his fate.",
          "posterUrl": "https://pics.filmaffinity.com/apocalypto-732074347-msmall.jpg"
      },
      {
          "id": 12,
          "title": "Taxi Driver",
          "year": "1976",
          "runtime": "113",
          "genres": "Drama",
          "director": ["Martin Scorsese"],
          "actors": ["Diahnne Abbott", "Frank Adu", "Victor Argo", "Gino Ardito"],
          "summary": "A mentally unstable Vietnam War veteran works as a night-time taxi driver in New York City where the perceived decadence and sleaze feeds his urge for violent action, attempting to save a preadolescent prostitute in the process.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/pt/thumb/3/33/Taxi_Driver_%281976_film_poster%29.jpg/200px-Taxi_Driver_%281976_film_poster%29.jpg"
      },
      {
          "id": 13,
          "title": "No Country for Old Men",
          "year": "2007",
          "runtime": "122",
          "genres": "Drama",
          "director": ["Ethan Coen", "Joel Coen"],
          "actors": ["Tommy Lee Jones", "Javier Bardem", "Josh Brolin", "Woody Harrelson"],
          "summary": "Violence and mayhem ensue after a hunter stumbles upon a drug deal gone wrong and more than two million dollars in cash near the Rio Grande.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/en/8/8b/No_Country_for_Old_Men_poster.jpg"
      },
      {
          "id": 21,
          "title": "Black Swan",
          "year": "2010",
          "runtime": "108",
          "genres": "Drama",
          "director": ["Darren Aronofsky"],
          "actors": ["Natalie Portman", "Mila Kunis", "Vincent Cassel", "Barbara Hershey"],
          "summary": "A committed dancer wins the lead role in a production of Tchaikovsky's \"Swan Lake\" only to find herself struggling to maintain her sanity.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/en/6/68/Black_Swan_poster.jpg"
      },
      {
          "id": 22,
          "title": "Inception",
          "year": "2010",
          "runtime": "148",
          "genres": "Sci-Fi",
          "director": ["Christopher Nolan"],
          "actors": ["Leonardo DiCaprio", "Joseph Gordon-Levitt", "Ellen Page", "Tom Hardy"],
          "summary": "A thief, who steals corporate secrets through use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a CEO.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/en/2/2e/Inception_%282010%29_theatrical_poster.jpg"
      },
      {
          "id": 25,
          "title": "Django Unchained",
          "year": "2012",
          "runtime": "165",
          "genres": "Western",
          "director": ["Quentin Tarantino"],
          "actors": ["Jamie Foxx", "Christoph Waltz", "Leonardo DiCaprio", "Kerry Washington"],
          "summary": "With the help of a German bounty hunter, a freed slave sets out to rescue his wife from a brutal Mississippi plantation owner.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/en/8/8b/Django_Unchained_Poster.jpg"
      },
      {
          "id": 26,
          "title": "The Silence of the Lambs",
          "year": "1991",
          "runtime": "118",
          "genres": "Thriller",
          "director": ["Jonathan Demme"],
          "actors": ["Jodie Foster", "Lawrence A. Bonney", "Kasi Lemmons", "Lawrence T. Wrentz"],
          "summary": "A young F.B.I. cadet must confide in an incarcerated and manipulative killer to receive his help on catching another serial killer who skins his victims.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/en/8/86/The_Silence_of_the_Lambs_poster.jpg"
      },
      {
          "id": 30,
          "title": "Pulp Fiction",
          "year": "1994",
          "runtime": "154",
          "genres": "Drama",
          "director": ["Quentin Tarantino"],
          "actors": ["Tim Roth", "Amanda Plummer", "Laura Lovelace", "John Travolta"],
          "summary": "The lives of two mob hit men, a boxer, a gangster's wife, and a pair of diner bandits intertwine in four tales of violence and redemption.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/pt/thumb/8/82/Pulp_Fiction_cover.jpg/230px-Pulp_Fiction_cover.jpg"
      },
      {
          "id": 36,
          "title": "Reservoir Dogs",
          "year": "1992",
          "runtime": "99",
          "genres": "Drama",
          "director": ["Quentin Tarantino"],
          "actors": ["Harvey Keitel", "Tim Roth", "Michael Madsen", "Chris Penn"],
          "summary": "After a simple jewelry heist goes terribly wrong, the surviving criminals begin to suspect that one of them is a police informant.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/pt/thumb/e/e1/Reservoir_Dogs_1992.jpg/200px-Reservoir_Dogs_1992.jpg"
      },
      {
          "id": 37,
          "title": "The Shining",
          "year": "1980",
          "runtime": "146",
          "genres": "Horror",
          "director": ["Stanley Kubrick"],
          "actors": ["Jack Nicholson", "Shelley Duvall", "Danny Lloyd", "Scatman Crothers"],
          "summary": "A family heads to an isolated hotel for the winter where an evil and spiritual presence influences the father into violence, while his psychic son sees horrific forebodings from the past and of the future.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/en/thumb/1/1d/The_Shining_%281980%29_U.K._release_poster_-_The_tide_of_terror_that_swept_America_IS_HERE.jpg/220px-The_Shining_%281980%29_U.K._release_poster_-_The_tide_of_terror_that_swept_America_IS_HERE.jpg"
      },
      {
          "id": 44,
          "title": "Gran Torino",
          "year": "2008",
          "runtime": "116",
          "genres": "Drama",
          "director": ["Clint Eastwood"],
          "actors": ["Clint Eastwood", "Christopher Carley", "Bee Vang", "Ahney Her"],
          "summary": "Disgruntled Korean War veteran Walt Kowalski sets out to reform his neighbor, a Hmong teenager who tried to steal Kowalski's prized possession: a 1972 Gran Torino.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/pt/thumb/c/c6/Gran_Torino_poster.jpg/200px-Gran_Torino_poster.jpg"
      },
      {
          "id": 62,
          "title": "Madagascar",
          "year": "2005",
          "runtime": "86",
          "genres": "Animation",
          "director": ["Eric Darnell", "Tom McGrath"],
          "actors": ["Ben Stiller", "Chris Rock", "David Schwimmer", "Jada Pinkett Smith"],
          "summary": "Spoiled by their upbringing with no idea what wild life is really like, four animals from New York Central Zoo escape, unwittingly assisted by four absconding penguins, and find themselves in Madagascar, among a bunch of merry lemurs",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/en/thumb/3/36/Madagascar_Theatrical_Poster.jpg/220px-Madagascar_Theatrical_Poster.jpg"
      },
      {
          "id": 77,
          "title": "The Lord of the Rings: The Return of the King",
          "year": "2003",
          "runtime": "201",
          "genres": "Adventure",
          "director": ["Peter Jackson"],
          "actors": ["Noel Appleby", "Ali Astin", "Sean Astin", "David Aston"],
          "summary": "Gandalf and Aragorn lead the World of Men against Sauron's army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/en/b/be/The_Lord_of_the_Rings_-_The_Return_of_the_King_%282003%29.jpg"
      },
      {
          "id": 81,
          "title": "WALL·E",
          "year": "2008",
          "runtime": "98",
          "genres": "Animation",
          "director": ["Andrew Stanton"],
          "actors": ["Ben Burtt", "Elissa Knight", "Jeff Garlin", "Fred Willard"],
          "summary": "In the distant future, a small waste-collecting robot inadvertently embarks on a space journey that will ultimately decide the fate of mankind.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/pt/thumb/3/30/WALL-E.jpg/250px-WALL-E.jpg"
      },
      {
          "id": 88,
          "title": "Once Upon a Time in America",
          "year": "1984",
          "runtime": "229",
          "genres": "Drama",
          "director": ["Sergio Leone"],
          "actors": ["Robert De Niro", "James Woods", "Elizabeth McGovern", "Joe Pesci"],
          "summary": "A former Prohibition-era Jewish gangster returns to the Lower East Side of Manhattan over thirty years later, where he once again must confront the ghosts and regrets of his old life.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/en/thumb/d/d8/Once_Upon_A_Time_In_America1.jpg/220px-Once_Upon_A_Time_In_America1.jpg"
      },
      {
          "id": 116,
          "title": "Interstellar",
          "year": "2014",
          "runtime": "169",
          "genres": "Sci-Fi",
          "director": ["Christopher Nolan"],
          "actors": ["Ellen Burstyn", "Matthew McConaughey", "Mackenzie Foy", "John Lithgow"],
          "summary": "A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/pt/thumb/3/3a/Interstellar_Filme.png/250px-Interstellar_Filme.png"
      },
      {
          "id": 119,
          "title": "Shrek 2",
          "year": "2004",
          "runtime": "93",
          "genres": "Animation",
          "director": ["Andrew Adamson", "Kelly Asbury", "Conrad Vernon"],
          "actors": ["Mike Myers", "Eddie Murphy", "Cameron Diaz", "Julie Andrews"],
          "summary": "Princess Fiona's parents invite her and Shrek to dinner to celebrate her marriage. If only they knew the newlyweds were both ogres.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/pt/thumb/7/78/Shrek_2_Poster.jpg/233px-Shrek_2_Poster.jpg"
      },
      {
          "id": 122,
          "title": "Shrek",
          "year": "2001",
          "runtime": "90",
          "genres": "Animation",
          "director": ["Andrew Adamson", "Vicky Jenson"],
          "actors": ["Mike Myers", "Eddie Murphy", "Cameron Diaz", "John Lithgow"],
          "summary": "After his swamp is filled with magical creatures, an ogre agrees to rescue a princess for a villainous lord in order to get his land back.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/pt/thumb/e/e6/Shrek_Poster.jpg/215px-Shrek_Poster.jpg"
      },
      {
          "id": 131,
          "title": "Ice Age",
          "year": "2002",
          "runtime": "81",
          "genres": "Animation",
          "director": ["Chris Wedge", "Carlos Saldanha"],
          "actors": ["Ray Romano", "John Leguizamo", "Denis Leary", "Goran Visnjic"],
          "summary": "Set during the Ice Age, a sabertooth tiger, a sloth, and a wooly mammoth find a lost human infant, and they try to return him to his tribe.",
          "posterUrl": "https://upload.wikimedia.org/wikipedia/en/thumb/3/3c/Ice_Age_%282002_film%29_poster.jpg/220px-Ice_Age_%282002_film%29_poster.jpg"
      }
  ]
}
