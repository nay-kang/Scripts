#coding=utf-8
import random
import signal
import sys
foods=["干煸豆角:¥14/份;", "香菇小油菜:¥12/份;", "蒜茸莴笋片:¥12/份;", "荷塘小炒:¥12/份;", "香芹木耳:¥12/份;", "虎皮尖椒:¥12/份;", "洋葱炒鸡蛋:¥13/份;", "木耳炒鸡蛋:¥13/份;", "青椒炒鸡蛋:¥13/份;", "剁椒炒鸡蛋:¥15/份;", "蒜苔鸡蛋:¥15/份;", "青笋鸡蛋:¥15/份;", "木须肉:¥16/份;", "肉沫茄子:¥15/份;", "肉沫酸豆角:¥13/份;", "肉沫炒外婆菜:¥15/份;", "土豆片五花肉:¥15/份;", "葱爆肉:¥16/份;", "农家小炒肉:¥18/份;", "小炒菜花:¥15/份;", "青笋腊肉:¥20/份;", "烟笋腊肉:¥20/份;", "土豆排骨:¥18/份;",
"豆角排骨:¥18/份;", "洋葱炒肉:¥15/份;", "青蒜肉片:¥15/份;", "香茹肉片:¥15/份;", "青笋肉片:¥15/份;", "木耳腐竹肉片:¥15/份;", "溜肉片:¥16/份;", "青椒肉丝:¥15/份;", "芹菜肉丝:¥15/份;", "藕片肉丝:¥15/份;", "蒜苔肉丝:¥15/份;", "豆角肉丝:¥15/份;", "香辣肉丝:¥15/份;", "土豆焖鸡块:¥15/份;", "鱼香肉丝:¥15/份;", "酱爆鸡丁:¥15/份;", "宫爆鸡丁:¥15/份;", "小炒鸡丝:¥16/份;", "香芹鸡丝:¥16/份;", "腐竹鸡丝:¥16/份;", "青椒鸡丝:¥16/份;", "蒜苔鸡丝:¥16/份;", "尖椒鸡丝:¥16/份;", "咖喱鸡:¥16/份;",
"香茹鸡堡:¥16/份;", "孜然鸡丁:¥16/份;", "萝卜干鸡丝:¥16/份;", "小炒鸡杂:¥18/份;", "孜然牛肉:¥22/份;", "豉椒牛肉:¥22/份;", "葱爆牛肉:¥22/份;", "土豆牛楠:¥28/份;", "西红柿牛楠:¥28/份;", "芹菜牛肉:¥22/份;", "咖喱牛肉:¥22/份;", "干锅腐竹:¥35/份;", "干锅排骨:¥48/份;", "干锅手撕包菜:¥25/份;", "干锅藕片:¥30/份;", "干锅菜花:¥28/份;", "干锅仔鸡:¥38/份;", "烧茄子:¥12/份;", "地三鲜:¥12/份;", "豆角茄子:¥12/份;", "清炒圆白菜:¥12/份;", "清炒大白菜:¥12/份;", "炝炒土豆丝:¥12/份;", "肉沫豆腐:¥13/份;",
"肉沫四季豆:¥15/份;", "外婆菜炒鸡蛋:¥15/份;", "西红柿鸡蛋:¥13/份;", "木耳肉丝:¥15/份;", "白菜五花肉:¥15/份;", "土豆肉丝:¥15/份;", "青椒香干:¥12/份;", "香干肉丝:¥15/份;"]
foods_len=len(foods)
#r=foods_len*random.random()
r=0
def signal_handler(signal,frame):
    #print("Yeah!Ctrl+C")
    global r
    r=int(r)
    #print(r)
    print foods[r]
    sys.exit(0)
signal.signal(signal.SIGINT,signal_handler)
#signal.pause()
while(True):
    r=foods_len*random.random()
