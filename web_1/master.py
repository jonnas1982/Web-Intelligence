import hashlib

def hasher(set_x):
  hashed = set()
  for x in set_x:
    hashed.add(hash(x))
  hashed_1 = min(hashed)
  hashed = set()

  for x in set_x:
    hashed.add(int(hashlib.sha256(x).hexdigest(), 16))
  hashed_2 = min(hashed)
  hashed = set()

  for x in set_x:
    hashed.add(int(hashlib.sha224(x).hexdigest(), 16))
  hashed_3 = min(hashed)
  hashed = set()

  for x in set_x:
    hashed.add(int(hashlib.sha384(x).hexdigest(), 16))
  hashed_4 = min(hashed)
  hashed = set()

  for x in set_x:
    hashed.add(int(hashlib.sha512(x).hexdigest(), 16))
  hashed_5 = min(hashed)
  hashed = set()

  hashed.add(hashed_1)
  hashed.add(hashed_2)
  hashed.add(hashed_3)
  hashed.add(hashed_4)
  hashed.add(hashed_5)

  return hashed

def check_dub():
    with open("file1.txt", "r") as f1, open("file2.txt", "r") as f2:
        text1 = f1.read()
        text2 = f2.read()
        l1 = len(text1)
        l2 = len(text2)
        shinglesize = 4
        shingles1 = []
        shingles2 = []
        for i in range(max(l1,l2)-shinglesize):
          if i + shinglesize < l1:
            toadd = text1[i:i+shinglesize]
            shingles1.append(toadd)
          if i + shinglesize < l2:
            toadd = text2[i:i+shinglesize]
            shingles2.append(toadd)

        set1 = set(map(lambda x: " ".join(x), shingles1))
        set2 = set(map(lambda x: " ".join(x), shingles2))

        hashed1 = hasher(set1)
        hashed2 = hasher(set2)

        overlap_len = len(hashed1.intersection(hashed2))
        union_len = len(hashed1.union(hashed2))

        jaccard = float(overlap_len)/float(union_len)*100

    return jaccard

print(check_dub())