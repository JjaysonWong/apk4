const topicData = [
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game7.png', date: '2023-06-06', name: '泰拉贝尔', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game8.png', date: '2023-06-06', name: ' 幻谕', gameType: '战斗策略', rating: '8.8'},
    { image: './assets/images/topicDetail/game9.png', date: '2023-06-06', name: '希望消不灭', gameType: '战斗策略', rating: '6.0'},
    { image: './assets/images/topicDetail/game10.png', date: '2023-06-06', name: '红玄传：我自为道', gameType: '战斗策略', rating: '7.5'},
    { image: './assets/images/topicDetail/game11.png', date: '2023-06-06', name: '群英召唤师', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game12.png', date: '2023-06-06', name: '名将集', gameType: '战斗策略', rating: '8.4'},
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game7.png', date: '2023-06-06', name: '泰拉贝尔', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game8.png', date: '2023-06-06', name: ' 幻谕', gameType: '战斗策略', rating: '8.8'},
    { image: './assets/images/topicDetail/game9.png', date: '2023-06-06', name: '希望消不灭', gameType: '战斗策略', rating: '6.0'},
    { image: './assets/images/topicDetail/game10.png', date: '2023-06-06', name: '红玄传：我自为道', gameType: '战斗策略', rating: '7.5'},
    { image: './assets/images/topicDetail/game11.png', date: '2023-06-06', name: '群英召唤师', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game12.png', date: '2023-06-06', name: '名将集', gameType: '战斗策略', rating: '8.4'},
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game12.png', date: '2023-06-06', name: '名将集', gameType: '战斗策略', rating: '8.4'},
    { image: './assets/images/topicDetail/game11.png', date: '2023-06-06', name: '群英召唤师', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game10.png', date: '2023-06-06', name: '红玄传：我自为道', gameType: '战斗策略', rating: '7.5'},
    { image: './assets/images/topicDetail/game9.png', date: '2023-06-06', name: '希望消不灭', gameType: '战斗策略', rating: '6.0'},
    { image: './assets/images/topicDetail/game8.png', date: '2023-06-06', name: ' 幻谕', gameType: '战斗策略', rating: '8.8'},
    { image: './assets/images/topicDetail/game7.png', date: '2023-06-06', name: '泰拉贝尔', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game7.png', date: '2023-06-06', name: '泰拉贝尔', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game8.png', date: '2023-06-06', name: ' 幻谕', gameType: '战斗策略', rating: '8.8'},
    { image: './assets/images/topicDetail/game9.png', date: '2023-06-06', name: '希望消不灭', gameType: '战斗策略', rating: '6.0'},
    { image: './assets/images/topicDetail/game10.png', date: '2023-06-06', name: '红玄传：我自为道', gameType: '战斗策略', rating: '7.5'},
    { image: './assets/images/topicDetail/game11.png', date: '2023-06-06', name: '群英召唤师', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game12.png', date: '2023-06-06', name: '名将集', gameType: '战斗策略', rating: '8.4'},
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game7.png', date: '2023-06-06', name: '泰拉贝尔', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game8.png', date: '2023-06-06', name: ' 幻谕', gameType: '战斗策略', rating: '8.8'},
    { image: './assets/images/topicDetail/game9.png', date: '2023-06-06', name: '希望消不灭', gameType: '战斗策略', rating: '6.0'},
    { image: './assets/images/topicDetail/game10.png', date: '2023-06-06', name: '红玄传：我自为道', gameType: '战斗策略', rating: '7.5'},
    { image: './assets/images/topicDetail/game11.png', date: '2023-06-06', name: '群英召唤师', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game12.png', date: '2023-06-06', name: '名将集', gameType: '战斗策略', rating: '8.4'},
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game7.png', date: '2023-06-06', name: '泰拉贝尔', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game8.png', date: '2023-06-06', name: ' 幻谕', gameType: '战斗策略', rating: '8.8'},
    { image: './assets/images/topicDetail/game9.png', date: '2023-06-06', name: '希望消不灭', gameType: '战斗策略', rating: '6.0'},
    { image: './assets/images/topicDetail/game10.png', date: '2023-06-06', name: '红玄传：我自为道', gameType: '战斗策略', rating: '7.5'},
    { image: './assets/images/topicDetail/game11.png', date: '2023-06-06', name: '群英召唤师', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game12.png', date: '2023-06-06', name: '名将集', gameType: '战斗策略', rating: '8.4'},
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game7.png', date: '2023-06-06', name: '泰拉贝尔', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game8.png', date: '2023-06-06', name: ' 幻谕', gameType: '战斗策略', rating: '8.8'},
    { image: './assets/images/topicDetail/game9.png', date: '2023-06-06', name: '希望消不灭', gameType: '战斗策略', rating: '6.0'},
    { image: './assets/images/topicDetail/game10.png', date: '2023-06-06', name: '红玄传：我自为道', gameType: '战斗策略', rating: '7.5'},
    { image: './assets/images/topicDetail/game11.png', date: '2023-06-06', name: '群英召唤师', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game12.png', date: '2023-06-06', name: '名将集', gameType: '战斗策略', rating: '8.4'},
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game12.png', date: '2023-06-06', name: '名将集', gameType: '战斗策略', rating: '8.4'},
    { image: './assets/images/topicDetail/game11.png', date: '2023-06-06', name: '群英召唤师', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game10.png', date: '2023-06-06', name: '红玄传：我自为道', gameType: '战斗策略', rating: '7.5'},
    { image: './assets/images/topicDetail/game9.png', date: '2023-06-06', name: '希望消不灭', gameType: '战斗策略', rating: '6.0'},
    { image: './assets/images/topicDetail/game8.png', date: '2023-06-06', name: ' 幻谕', gameType: '战斗策略', rating: '8.8'},
    { image: './assets/images/topicDetail/game7.png', date: '2023-06-06', name: '泰拉贝尔', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game7.png', date: '2023-06-06', name: '泰拉贝尔', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game8.png', date: '2023-06-06', name: ' 幻谕', gameType: '战斗策略', rating: '8.8'},
    { image: './assets/images/topicDetail/game9.png', date: '2023-06-06', name: '希望消不灭', gameType: '战斗策略', rating: '6.0'},
    { image: './assets/images/topicDetail/game10.png', date: '2023-06-06', name: '红玄传：我自为道', gameType: '战斗策略', rating: '7.5'},
    { image: './assets/images/topicDetail/game11.png', date: '2023-06-06', name: '群英召唤师', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game12.png', date: '2023-06-06', name: '名将集', gameType: '战斗策略', rating: '8.4'},
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game1.png', date: '2023-06-06', name: '少女前线2', gameType: '战斗策略', rating: '9.7'},
    { image: './assets/images/topicDetail/game2.png', date: '2023-06-06', name: '超战迹', gameType: '战斗策略', rating: '8.9'},
    { image: './assets/images/topicDetail/game3.png', date: '2023-06-06', name: '修仙掌门人', gameType: '战斗策略', rating: '9.2'},
    { image: './assets/images/topicDetail/game4.png', date: '2023-06-06', name: '纸嫁衣第6部', gameType: '战斗策略', rating: '7.0'},
    { image: './assets/images/topicDetail/game5.png', date: '2023-06-06', name: '方块人的简单生活', gameType: '战斗策略', rating: '8.3'},
    { image: './assets/images/topicDetail/game6.png', date: '2023-06-06', name: '代号：FTK-为了吾王', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game7.png', date: '2023-06-06', name: '泰拉贝尔', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game8.png', date: '2023-06-06', name: ' 幻谕', gameType: '战斗策略', rating: '8.8'},
    { image: './assets/images/topicDetail/game9.png', date: '2023-06-06', name: '希望消不灭', gameType: '战斗策略', rating: '6.0'},
    { image: './assets/images/topicDetail/game10.png', date: '2023-06-06', name: '红玄传：我自为道', gameType: '战斗策略', rating: '7.5'},
    { image: './assets/images/topicDetail/game11.png', date: '2023-06-06', name: '群英召唤师', gameType: '战斗策略', rating: '9.0'},
    { image: './assets/images/topicDetail/game12.png', date: '2023-06-06', name: '名将集', gameType: '战斗策略', rating: '8.4'},
];

const itemsPerPage = 30; // Number of items per page

// Initialize the first page on DOMContentLoaded
document.addEventListener('DOMContentLoaded', () => {
    updatePageContent(1);
});

// Event delegation for pagination
document.addEventListener('click', function (e) {
    const target = e.target;
    const totalPages = Math.ceil(topicData.length / itemsPerPage);
    const currentPage = parseInt(document.querySelector('.page-number.active')?.dataset.page || '1', 10);

    if (target.classList.contains('first-page')) {
        updatePageContent(1);
    } else if (target.classList.contains('prev-page') && currentPage > 1) {
        updatePageContent(currentPage - 1);
    } else if (target.classList.contains('next-page') && currentPage < totalPages) {
        updatePageContent(currentPage + 1);
    } else if (target.classList.contains('last-page')) {
        updatePageContent(totalPages);
    } else if (target.classList.contains('page-number')) {
        const page = parseInt(target.dataset.page, 10);
        updatePageContent(page);
    }
});

// Function to update the content based on the current page
function updatePageContent(currentPage) {
    const contentWrap = document.querySelector('.app-list');
    const totalPages = Math.ceil(topicData.length / itemsPerPage);

    // Calculate start and end indices for slicing data
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const currentItems = topicData.slice(startIndex, endIndex);

    // Render the current page's content
    contentWrap.innerHTML = currentItems
        .map(
            (item) => `
            <div class="appWrap">
                <img src="${item.image}" alt="App Image" />
                <div class="detailWrap">
                    <p class="name">${item.name}</p>
                    <div class="gameType">
                        <p class="type">${item.gameType}</p>
                    </div>
                    <p class="dateUpdate">${item.date}更新</p>
                </div>
                <div class="starWrap">
                    <img src="./assets/images/download/star-fill.png" alt="Star Fill" />
                    <p class="ratingScore">${item.rating}</p>
                </div>
            </div>
            `
        )
        .join('');

    // Update pagination
    updatePagination(currentPage, totalPages);
}

// Function to update pagination
function updatePagination(currentPage, totalPages) {
    const pagination = document.querySelector('.pagination');
    const pageNumbers = [];

    if (totalPages <= 3) {
        // Show all pages if total pages are 3 or less
        for (let i = 1; i <= totalPages; i++) {
            pageNumbers.push(
                `<button class="page-number ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</button>`
            );
        }
    } else {
        if (currentPage === 1 || currentPage === 2) {
            // Page 1 or 2: Show 1 2 3 ... totalPages
            pageNumbers.push(
                `<button class="page-number ${1 === currentPage ? 'active' : ''}" data-page="1">1</button>`,
                `<button class="page-number ${2 === currentPage ? 'active' : ''}" data-page="2">2</button>`,
                `<button class="page-number ${3 === currentPage ? 'active' : ''}" data-page="3">3</button>`,
                `<span class="dots">...</span>`,
                `<button class="page-number" data-page="${totalPages}">${totalPages}</button>`
            );
        } else if (currentPage === totalPages || currentPage === totalPages - 1) {
            // Last page or second to last page: Show 1 ... totalPages-2 totalPages-1 totalPages
            pageNumbers.push(
                `<button class="page-number" data-page="1">1</button>`,
                `<span class="dots">...</span>`,
                `<button class="page-number ${totalPages - 2 === currentPage ? 'active' : ''}" data-page="${totalPages - 2}">${totalPages - 2}</button>`,
                `<button class="page-number ${totalPages - 1 === currentPage ? 'active' : ''}" data-page="${totalPages - 1}">${totalPages - 1}</button>`,
                `<button class="page-number ${totalPages === currentPage ? 'active' : ''}" data-page="${totalPages}">${totalPages}</button>`
            );
        } else {
            // Middle pages: Show 1 ... currentPage-1 currentPage currentPage+1 ... totalPages
            pageNumbers.push(`<button class="page-number" data-page="1">1</button>`);

            if (currentPage > 2) {
                pageNumbers.push(`<span class="dots">...</span>`);
            }

            pageNumbers.push(
                `<button class="page-number" data-page="${currentPage - 1}">${currentPage - 1}</button>`,
                `<button class="page-number active" data-page="${currentPage}">${currentPage}</button>`,
                `<button class="page-number" data-page="${currentPage + 1}">${currentPage + 1}</button>`
            );

            if (currentPage < totalPages - 2) {
                pageNumbers.push(`<span class="dots">...</span>`);
            }

            if (currentPage + 1 < totalPages) {
                pageNumbers.push(`<button class="page-number" data-page="${totalPages}">${totalPages}</button>`);
            }
        }
    }

    pagination.innerHTML = `
        <button class="first-page" ${currentPage === 1 ? 'disabled' : ''}>首页</button>
        <button class="prev-page" ${currentPage === 1 ? 'disabled' : ''}>上一页</button>
        ${pageNumbers.join('')}
        <button class="next-page" ${currentPage === totalPages ? 'disabled' : ''}>下一页</button>
        <button class="last-page" ${currentPage === totalPages ? 'disabled' : ''}>尾页</button>
    `;
}