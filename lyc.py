import time

# Song lyrics
song_lyrics = """
Pal-pal jeena muhaal mera tere bina
Yeh saare nashe bekaar teri aankhon ke siva
Ghar nahi jaata, main bahar, rehta tera intezaar
Mere khwabon mein aa na karke 16 singhaar
Main ab kyun hosh mein aata nahi?
Sukoon yeh dil kyun paata nahi?
Kyun todun khud se jo the waade?
Ke ab yeh ishq nibhana nahi
"""

# Split lyrics into words
words = song_lyrics.split()

# Word by word print with delay
for word in words:
    print(word, end=' ', flush=True)
    time.sleep(0.5)  # 0.5 sec delay, adjust as needed

print("\n\n🎵 Song Finished 🎵")