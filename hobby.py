from kanren.facts import Relation, facts, fact
from kanren.core import var, run
from kanren.goals import membero
from kanren import vars

ukuran = Relation()
warna = Relation()
gelap = Relation()
jenis = Relation()

facts(ukuran,	("beruang" , "besar"),
				("gajah" , "besar"),
				("kucing" , "kecil"))

facts(warna,	("beruang" , "coklat"),
				("gajah" , "hitam"),
				("kucing" , "kelabu"))

facts(jenis,	("beruang" , "karnivora"),
				("kucing" , "karnivora"),

fact(gelap, "hitam")
fact(gelap, "coklat")

z = var()
kecil = run (0,z,ukuran(z, "kecil"))
print("Hewan berukuran kecil= ", kecil)

besar = run (0,z,ukuran(z, "besar"))
print("Hewan berukuran besar= ", besar)

color = run (0,z,ukuran(z, "coklat"))
print("Hewan berwarna coklat= ", color)

bescok = run (0,z,ukuran(z, besar), membero(z, color))
print("Hewan berukuran besar dan berwarna coklat= ", bescok)
