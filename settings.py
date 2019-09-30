def init():
    global last_domain
    global index
    global ignore
    global seed
    global robots
    global text

#'https://www.aalborg.dk/',, 'https://python.org' 'https://www.aahus.dk/'
    seed = ['https://www.concept-i.dk/']
    last_domain = " "
    index = {}
    robots = []
    ignore = ["facebook.com", "twitter.com", "youtube.com", "instagram.com", "plus.google.com", "linkedin.com", "google.com", "feedproxy.google.com"]
    text = {}
