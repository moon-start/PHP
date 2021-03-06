<?php
interface LGG {
  public function log(string $msg);
}
class QQ {
  private $QQ;
  public function getQQ(): QQ {
    return $this->QQ;
  }
  public function setQQ(QQ $AB) {
    $this->QQ = $AB;
  }
}


$app = new QQ;
// 使用 new class 建立匿名類別

#### new class                   ### 匿名類別
#### new class implements LGG ### 匿名類別的實作介面
$app->setQQ(new class implements LGG {
  public function log(string $msg) {
    print($msg);
  }
});

#### 呼叫匿名實作的方法
$app->getQQ()->log("這是一個匿名類別的例子");
?>