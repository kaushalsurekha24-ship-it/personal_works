import time
import sys

def print_lyrics():
    lyrics =[
        "Sochu ke milni te bolaanga ki",
    "Teri taan gallaan ch…shaayari",
    "Vekhegi mainu te sochegi* kya tu",
    "Mitti da banda main, tu taan pari...",
    "Ishqe di galiyach, khoya e dil ve",
    "Aas lagaaye ik jaaye tu mil ve",
    "Kol tere mainu",
    "aan de soni",
    "karaan* main kitne jatan O soni",
    "Dooron dooron main",
    "vekhaan tenu soneyo",


  ]
    
    delays=[
     1.0,1.0,1.0,0.11,0.5,0.5,0.5,0.8,0.09,0.9
 ]   

    print(" dooron dooron:\n")
    time.sleep(1.4)

    for i, line in enumerate(lyrics):
        for char in line:
            sys.stdout.write(char)
            sys.stdout.flush()
            time.sleep(0.1)
        print()
        time.sleep(delays[i])         
        