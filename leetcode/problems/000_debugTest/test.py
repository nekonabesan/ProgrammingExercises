import unittest  # 標準モジュールを読み込みます
import Solution       # テスト対象のファイルを読み込みます

class TestA(unittest.TestCase):  # クラスを派生させて自分用のクラスを作ります
    def test_1(self):
        self.assertEqual(Solution.twoSum(self, [2, 7, 11, 15], 9), [0, 1])
        self.assertEqual(Solution.twoSum(self, [3, 2, 4], 6), [1, 2])
        self.assertEqual(Solution.twoSum(self, [3, 3], 6), [0, 1])
        self.assertEqual(Solution.twoSum(self, [-1, -2, -3, -4, -5], -8), [2, 4])
        self.assertEqual(Solution.twoSum(self, [23, -2, -3, -4, 20, -5, 21, 22, -1], -9), [3, 5])

if __name__ == '__main__':
    unittest.main()